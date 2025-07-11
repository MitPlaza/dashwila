import defaultTheme from 'tailwindcss/defaultTheme'
import forms from '@tailwindcss/forms'

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './resources/js/**/*.js', // por si usas JS o componentes interativos
  ],

  theme: {
    extend: {
      fontFamily: {
        sans: ['Figtree', ...defaultTheme.fontFamily.sans],
        outfit: ['Outfit', 'sans-serif'],
      },
      colors: {
        current: 'currentColor',
        transparent: 'transparent',
        white: '#ffffff',
        black: '#101828',
        brand: {
          25: '#f2f7ff',
          50: '#ecf3ff',
          100: '#dde9ff',
          200: '#c2d6ff',
          300: '#9cb9ff',
          400: '#7592ff',
          500: '#465fff',
          600: '#3641f5',
          700: '#2a31d8',
          800: '#252dae',
          900: '#262e89',
          950: '#161950',
        },
        'blue-light': {
          25: '#f5fbff',
          50: '#f0f9ff',
          100: '#e0f2fe',
          200: '#b9e6fe',
          300: '#7cd4fd',
          400: '#36bffa',
          500: '#0ba5ec',
          600: '#0086c9',
          700: '#026aa2',
          800: '#065986',
          900: '#0b4a6f',
          950: '#062c41',
        },
        gray: {
          25: '#fcfcfd',
          50: '#f9fafb',
          100: '#f2f4f7',
          200: '#e4e7ec',
          300: '#d0d5dd',
          400: '#98a2b3',
          500: '#667085',
          600: '#475467',
          700: '#344054',
          800: '#1d2939',
          900: '#101828',
          950: '#0c111d',
          dark: '#1a2231',
        },
        orange: {
          25: '#fffaf5',
          50: '#fff6ed',
          100: '#ffead5',
          200: '#fddcab',
          300: '#feb273',
          400: '#fd853a',
          500: '#fb6514',
          600: '#ec4a0a',
          700: '#c4320a',
          800: '#9c2a10',
          900: '#7e2410',
          950: '#511c10',
        },
        success: {
          25: '#f6fef9',
          50: '#ecfdf3',
          100: '#d1fadf',
          200: '#a6f4c5',
          300: '#6ce9a6',
          400: '#32d583',
          500: '#12b76a',
          600: '#039855',
          700: '#027a48',
          800: '#05603a',
          900: '#054f31',
          950: '#053321',
        },
        error: {
          25: '#fffbfa',
          50: '#fef3f2',
          100: '#fee4e2',
          200: '#fecdca',
          300: '#fda29b',
          400: '#f97066',
          500: '#f04438',
          600: '#d92d20',
          700: '#b42318',
          800: '#912018',
          900: '#7a271a',
          950: '#55160c',
        },
        warning: {
          25: '#fffcf5',
          50: '#fffaeb',
          100: '#fef0c7',
          200: '#fedf89',
          300: '#fec84b',
          400: '#fdb022',
          500: '#f79009',
          600: '#dc6803',
          700: '#b54708',
          800: '#93370d',
          900: '#7a2e0e',
          950: '#4e1d09',
        },
        theme: {
          pink: {
            500: '#ee46bc',
          },
          purple: {
            500: '#7a5af8',
          },
        },
      },
    },
  },

  plugins: [forms],
};

