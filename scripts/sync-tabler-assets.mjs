// Copies the Tabler files the preview gallery loads with plain <script>/<link> tags
// into public/tabler. Runs automatically before `pnpm dev` and `pnpm build`.
//
//   node scripts/sync-tabler-assets.mjs             copy from node_modules (fast)
//   node scripts/sync-tabler-assets.mjs --preview   also download demo images (~30 MB, once)
import fs from 'node:fs'
import path from 'node:path'
import { fileURLToPath } from 'node:url'

const root = path.resolve(path.dirname(fileURLToPath(import.meta.url)), '..')
const dist = path.join(root, 'node_modules/@tabler/core/dist')
const out = path.join(root, 'public/tabler')

if (!fs.existsSync(dist)) {
    console.error('Run `pnpm install` first (node_modules/@tabler/core not found).')
    process.exit(1)
}

const copy = (from, to) => fs.cpSync(path.join(dist, from), path.join(out, to), { recursive: true, force: true })

fs.mkdirSync(out, { recursive: true })
copy('libs', 'libs')
copy('img', 'img')
copy('js', 'js')
copy('css/tabler.rtl.min.css', 'css/tabler.rtl.min.css')

// UI language packs for libraries that ship without one (HugeRTE editor).
fs.cpSync(path.join(root, 'resources/vendor/hugerte-langs'), path.join(out, 'libs/hugerte/langs'), { recursive: true, force: true })

if (process.argv.includes('--preview') && !fs.existsSync(path.join(root, 'scripts/preview-static.txt'))) {
    console.log('The preview gallery was removed (template:strip-preview); nothing to download.')
} else if (process.argv.includes('--preview')) {
    const list = fs.readFileSync(path.join(root, 'scripts/preview-static.txt'), 'utf8').split('\n').map((s) => s.trim()).filter(Boolean)
    const todo = list.filter((f) => !fs.existsSync(path.join(out, f)))
    console.log(`Downloading ${todo.length} demo images from preview.tabler.io ...`)

    let failed = 0
    const queue = [...todo]
    const worker = async () => {
        while (queue.length) {
            const f = queue.shift()
            try {
                const res = await fetch(`https://preview.tabler.io/${f}`)
                if (!res.ok) throw new Error(res.status)
                const dest = path.join(out, f)
                fs.mkdirSync(path.dirname(dest), { recursive: true })
                fs.writeFileSync(dest, Buffer.from(await res.arrayBuffer()))
            } catch (e) {
                failed++
                console.warn(`  failed: ${f} (${e.message})`)
            }
        }
    }
    await Promise.all(Array.from({ length: 8 }, worker))
    console.log(`Done. ${todo.length - failed} downloaded, ${failed} failed.`)
}
