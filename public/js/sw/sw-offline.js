workbox.skipWaiting()
workbox.clientsClaim()
 
// fonts
workbox.router.registerRoute('https://fonts.googleapis.com/(.*)',
  workbox.strategies.cacheFirst({
    cacheName: 'googleapis',
    cacheExpiration: {
      maxEntries: 30
    },
    cacheableResponse: {statuses: [0, 200]}
  })
);
 
// Subdirectory
workbox.router.registerRoute(/admin/(.*), workbox.strategies.staleWhileRevalidate());
 
// images
workbox.router.registerRoute(/\.(?:png|gif|jpg|svg)$/,
  workbox.strategies.cacheFirst({
    cacheName: 'images-cache'
  })
);