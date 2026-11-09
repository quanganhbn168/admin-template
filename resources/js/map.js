// Loaded on demand (see app.js) only on pages that contain a <x-map>.
// Uses Tabler's own vector map component and the world map shipped with @tabler/core.
import { VectorMap } from '@tabler/core/dist/js/tabler-vector-map.esm.js';
import { world } from '@tabler/core/dist/js/maps/world.esm.js';

VectorMap.addMap('world', world);

// Elements carry data-bs-map / data-bs-values but not data-bs-toggle,
// so Tabler does not try to create them before the map data is registered.
document.querySelectorAll('[data-vector-map]').forEach((el) => VectorMap.getOrCreateInstance(el));
