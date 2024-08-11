/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        'primary': 'var(--orange-9)',
        'primary-border': 'var(--orange-10)',
        'primary-hover': 'var(--orange-11)',
        'primary-focus': 'var(--orange-a9)',
        'primary-active': 'var(--orange-a10)',

        'secondary': 'var(--gray-11)',
        'secondary-border': 'var(--gray-12)',
        'secondary-hover': 'var(--gray-a9)',
        'secondary-focus': 'var(--gray-a10)',
        'secondary-active': 'var(--gray-a11)',

        'light': 'var(--orange-contrast)',
        'dark': 'var(--gray-12)',
        'gray': 'var(--gray-9)',
      },
      fontFamily: {
        title: ['var(--font-title)', 'sans-serif'],
        body: ['var(--font-body)', 'sans-serif'],
      },
      backgroundImage: {
        'gradient-primary': 'var(--bg-gradient)',
      },
    },
  },
  plugins: [],
}

