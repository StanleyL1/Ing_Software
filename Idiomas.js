document.addEventListener('DOMContentLoaded', function () {
  i18next
    .use(i18nextHttpBackend)
    .use(i18nextBrowserLanguageDetector)
    .init({
      fallbackLng: 'es',
      debug: true,
      backend: {
        // Asegúrate de que la ruta es accesible y correcta
        loadPath: '/locales/en/translation.json',
      },
      detection: {
        // Configuraciones para la detección del idioma
        order: ['querystring', 'cookie', 'localStorage', 'navigator', 'htmlTag'],
        caches: ['cookie']
      },
    }, function(err, t) {
      if (err) return console.log('something went wrong loading', err);
      updateContent();
    });

  function updateContent() {
    document.querySelectorAll("[data-i18n]").forEach(function(element) {
      var keys = element.getAttribute("data-i18n");
      element.innerHTML = i18next.t(keys);
    });
  }

  document.getElementById('languageSelector').addEventListener('change', function() {
    i18next.changeLanguage(this.value, function() {
      updateContent();
    });
  });
});
