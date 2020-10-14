module.exports = {
  future: {
    // removeDeprecatedGapUtilities: true,
    // purgeLayersByDefault: true,
  },
  purge: [],
  plugins: [
    require('@tailwindcss/ui'),
  ],
  theme: {
    fontFamily:{
        'san' : ['Sarabun'],
        'serif' : ['Sarabun'],
    },
    extend: {
        colors: {
          brand: '#FF5733',
          tomato: {
            '50':  '#fbf7f2',
            '100': '#fcede3',
            '200': '#fad8c5',
            '300': '#f8b993',
            '400': '#f88a54',
            '500': '#f8602d',
            '600': '#f03e1e',
            '700': '#d32f20',
            '800': '#ab2622',
            '900': '#8b201f',
          },
          goldenrod: {
            '50':  '#faf8ee',
            '100': '#faf4d1',
            '200': '#f5eb93',
            '300': '#efd94d',
            '400': '#e2bb1a',
            '500': '#d59a09',
            '600': '#ba7506',
            '700': '#935909',
            '800': '#72440e',
            '900': '#593610',
          },
          yellowgreen: {
            '50':  '#fafaf5',
            '100': '#f8f9e0',
            '200': '#eff2a8',
            '300': '#e2e463',
            '400': '#c0ca24',
            '500': '#95ac0c',
            '600': '#6d8907',
            '700': '#546a0a',
            '800': '#404f0e',
            '900': '#313d0f',
          },
          mediumseagreen: {
            '50':  '#f0f9f8',
            '100': '#dff7f1',
            '200': '#b9f1de',
            '300': '#82e6c7',
            '400': '#35d2a1',
            '500': '#13b977',
            '600': '#109c59',
            '700': '#167d4c',
            '800': '#176140',
            '900': '#154e36',
          },
          deepskyblue: {
            '50':  '#f1f9fa',
            '100': '#def6f8',
            '200': '#b6edf0',
            '300': '#83dee9',
            '400': '#3dc4de',
            '500': '#19a3cf',
            '600': '#1382b6',
            '700': '#186793',
            '800': '#184f6d',
            '900': '#164056',
          },
          dodgerblue: {
            '50':  '#f4fafc',
            '100': '#e3f6fc',
            '200': '#bde9f9',
            '300': '#90d5f7',
            '400': '#53b1f5',
            '500': '#2788f2',
            '600': '#1c64e8',
            '700': '#1c4fca',
            '800': '#193d97',
            '900': '#163174',
          },
          royalblue: {
            '50':  '#f5f9fc',
            '100': '#e7f3fc',
            '200': '#c9e1fa',
            '300': '#a8c8f9',
            '400': '#799ef8',
            '500': '#4c71f8',
            '600': '#374ef2',
            '700': '#2f3edb',
            '800': '#2731ac',
            '900': '#202986',
          },
          mediumslateblue: {
            '50':  '#f5f7fb',
            '100': '#eaeffb',
            '200': '#d3d8f9',
            '300': '#bbbcf8',
            '400': '#9b91f8',
            '500': '#7963f8',
            '600': '#5e43f2',
            '700': '#4a35dd',
            '800': '#3a2bb1',
            '900': '#2f258b',
          },
          orchid: {
            '50':  '#fbf8f9',
            '100': '#faedf7',
            '200': '#f5d0f1',
            '300': '#f2ace8',
            '400': '#f177dc',
            '500': '#f14bce',
            '600': '#e22eb3',
            '700': '#b7248e',
            '800': '#891e68',
            '900': '#6a1a4f',
          },
          crimson: {
            '50':  '#fcf9f7',
            '100': '#fceff0',
            '200': '#fad5e0',
            '300': '#f9b0c4',
            '400': '#f97a96',
            '500': '#fa4f69',
            '600': '#f23048',
            '700': '#d3253d',
            '800': '#a51e33',
            '900': '#82192a',
          },
        }
      },
  },
  variants: {},
  plugins: [],
}
