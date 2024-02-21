module.exports = {
  root: true,
  env: {
    browser: true,
    node: true,
    es2021: true,
  },
  parser: "vue-eslint-parser",
  parserOptions: {
    parser: "@typescript-eslint/parser",
  },
  extends: ["@nuxt/eslint-config", "plugin:prettier/recommended"],
  plugins: [],
  rules: {
    "vue/multi-word-component-names": 0,
    // "vue/no-multiple-template-root": 0,
    "prettier/prettier": ["error", { "singleQuote": true, "semi": false }]
  },
}
