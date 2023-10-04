/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php', // Bladeテンプレートのすべて
    './resources/**/*.vue', // Vueコンポーネントのすべて
    './resources/**/*.jsx', // JSXファイルのすべて
    './resources/**/*.tsx', // TypeScript Reactファイルのすべて
    './resources/**/*.js', // JavaScriptファイルも含める
  ],
  
  theme: {
    extend: {},
  },
  plugins: [],
}

