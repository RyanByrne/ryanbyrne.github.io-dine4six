/** Service Worker */
self.addEventListener('fetch', function(event) {
  event.respondWith(
    caches.match(event.request).then(function(response) {
      return response || fetch(event.request);
    })
  );
});
 version: 1.4

self.addEventListener('install', function(e) {
  e.waitUntil(
    caches.open('the-magic-cache').then(function(cache) {
     return cache.addAll([
            '/',
            '/index.html',
            '/add-place.html',
            '/single-event.html',
            '/manifest.json',
            '/favicon.ico',
            '/js',
            '/img',
            '/font',
            '/css',
            '/logo.svg',
            '/logo-animate.svg',
    });
  );
});

