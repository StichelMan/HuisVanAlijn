import {themes as prismThemes} from 'prism-react-renderer';

/** @type {import('@docusaurus/types').Config} */
const config = {
  title: 'Huis van Alijn Documentatie',
  tagline: 'Huis van Alijn Documentatie',
  favicon: '/img/favicon.ico', 
  url: 'https://poppen.antwaan.be',
  baseUrl: process.env.BASE_PATH || '/',
  organizationName: 'Huis van Alijn', // Usually your GitHub org/user name.
  projectName: 'poppen', // Usually your repo name.

  onBrokenLinks: 'throw',
  onBrokenMarkdownLinks: 'warn',

  i18n: {
    defaultLocale: 'en',
    locales: ['en'],
  },

  presets: [
    [
      'classic',
      /** @type {import('@docusaurus/preset-classic').Options} */
      ({
        docs: {
          routeBasePath: '/',
          sidebarPath: './sidebars.js',
        },
        blog: {
          showReadingTime: true,
        },
        theme: {
          customCss: './src/css/custom.css',
        },
      }),
    ],
  ],
// TODO index page for docs page
  themeConfig:
    /** @type {import('@docusaurus/preset-classic').ThemeConfig} */
    ({
      // Replace with your project's social card
      image: 'img/docusaurus-social-card.jpg',
      navbar: {
        title: 'Huis van Alijn Documentation',
        logo: {
          alt: 'Logo huis van Alijn',
          src: 'img/logo.svg',
        },
        items: [
          {
            type: 'doc',
            docId: 'docs-intro',
            position: 'left',
            label: 'Docs',
          },
          {
            href: 'https://gitlab.com/ikdoeict/vakken/opo_agile_team_project/projecten/2324_atp_poppen',
            label: 'GitLab',
            position: 'right',
          }

        ],
      },
      footer: {
        style: 'dark',
        copyright: `Copyright © ${new Date().getFullYear()} Poppen, Inc. Built with Docusaurus.`,
      },
      prism: {
        theme: prismThemes.github,
        darkTheme: prismThemes.dracula,
      },
    }),
};

export default config;
