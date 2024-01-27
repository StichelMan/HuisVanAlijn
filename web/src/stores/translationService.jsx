// translationService.jsx
import enTranslations from './translations/en.json';
import nlTranslations from './translations/nl.json';
import frTranslations from './translations/fr.json';

const translations = {
    en: enTranslations,
    nl: nlTranslations,
    fr: frTranslations,
};

export function translate(key, language, pageOrView) {
    // eslint-disable-next-line security/detect-object-injection
    const translation = translations[language];

    // eslint-disable-next-line security/detect-object-injection
    if (translation && translation[pageOrView]) {
        // eslint-disable-next-line security/detect-object-injection
        return translation[pageOrView][key] || key;
    } else {
        return key;
    }
}

// Create a separate function for translating content specific to 'welcome_view'
export function translateWelcomeView(key, language) {
    return translate(key, language, 'welcome_view');
}

export function translateRoomsView(key, language) {
    return translate(key, language, 'rooms_view');
}

export function translateAccessibilityView(key, language) {
    return translate(key, language, 'accessibility_view');
}

export function translatePuppetDetailComponent(key, language) {
    return translate(key, language, 'puppetdetail_component');
}

export function translatePuppetsListComponent(key, language) {
    return translate(key, language, 'puppetslist_component');
}

export function translateCreateSceneView(key, language) {
    return translate(key, language, 'createscene_view');
}