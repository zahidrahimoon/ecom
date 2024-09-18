/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        colors: {
          'rich-black-fogra-29': 'hsl(222, 44%, 8%)',
          'middle-blue-green_40': 'hsla(174, 64%, 71%, 0.4)',
          'midnightgreen': 'hsl(186, 100%, 19%)',
          'midnight-green_a25': 'hsla(186, 100%, 19%, 0.25)',
          'independece': 'hsl(236, 14%, 39%)',
          'verdigris': 'hsl(182, 100%, 35%)',
          'ming': 'hsl(186, 72%, 24%)',
          'space-cadet': 'hsla(226, 45%, 24%)',
          'eerie-black': 'hsl(0, 0%, 13%)',
          'alice-blue': 'hsl(187, 25%, 94%)',
          'gray-web': 'hsl(0, 0%, 50%)',
          'gainsboro': 'hsl(0, 0%, 87%)',
          'dark-cyan': 'hsl(158, 36%, 37%)',
          'cream': 'hsl(30, 38%, 92%)',
          'very-dark-blue': 'hsl(157, 30%, 24%)',
          'dark-grayish-blue': 'hsl(228, 12%, 48%)',
        },
        boxShadow: {
          'custom-shadow': '0.5rem 0.5rem 0 rgba(22, 160, 133, 0.2)',
        },
        fontFamily: {
          oswald: ['Oswald', 'sans-serif'],
          rubik: ['Rubik', 'sans-serif'],
        },
        textShadow: {
            'custom': '0.6rem 0.6rem 0 rgba(0, 0, 0, 0.7)',
            'lg': '0.8rem 0.8rem 0 rgba(0, 0, 0, 0.8)'
          }
      },
    },
    plugins: [],
  }
