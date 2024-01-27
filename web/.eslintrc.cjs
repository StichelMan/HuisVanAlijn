module.exports = {
    "plugins": ["security", "jest"],
    "extends": ["eslint:recommended", "plugin:security/recommended"],
    "overrides": [
        {
            "files": ["*.js", "*.jsx"],
            "excludedFiles": ["babel-eslint/**"],
        }
    ],
    "ignorePatterns": ["/dist/"],
    "env": {
        "browser": true,
        "node": true,
        "es6": true,
        "jest": true,
    },
    "parser": "@typescript-eslint/parser",
    "parserOptions": {
        "ecmaFeatures": {
            "jsx": true
        },
        "ecmaVersion": 12,
        "sourceType": "module"
    },
    "rules": {
        "no-console": 0,
        "no-debugger": 0,
        'security/detect-bidi-characters': 'warn',
        'security/detect-buffer-noassert': 'warn',
        'security/detect-child-process': 'warn',
        'security/detect-disable-mustache-escape': 'warn',
        'security/detect-eval-with-expression': 'warn',
        'security/detect-new-buffer': 'warn',
        'security/detect-no-csrf-before-method-override': 'warn',
        'security/detect-non-literal-fs-filename': 'warn',
        'security/detect-non-literal-regexp': 'warn',
        'security/detect-non-literal-require': 'warn',
        'security/detect-object-injection': 'warn',
        'security/detect-possible-timing-attacks': 'warn',
        'security/detect-pseudoRandomBytes': 'warn',
        'security/detect-unsafe-regex': 'warn',
    }
};
