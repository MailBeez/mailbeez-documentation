# MailBeez documentation for Helios

This branch is the content source for the standalone V5 documentation site. The original documentation branch continues to serve the legacy site.

- Keep page folder names, language files, slugs and route front matter stable when moving a guide in the menu.
- Edit [navigation.v5.yaml](navigation.v5.yaml) to place existing pages. Each entry identifies the source folder under `pages/03.documentation`. Optional titles apply only to the sidebar and Previous/Next navigation.
- Use GitHub-style Markdown alerts (`> [!NOTE]`, `> [!WARNING]` and `> [!TIP]`) for callouts. Use Helios shortcodes for card grids, accordions, lightbox images and video embeds. The English and German landing pages, Newsletter2Go, Coupon Recipes and Block Admin demonstrate these components.
- Translate an article in its existing folder. The two languages share a content identity and each published translation keeps its localized URL.

The sections follow BeezUI V5 terminology from the live navigation provider at `dabe2ddb`. Getting started and Reference contain documentation-specific material. Topics with no matching guide in this checkout, including Calendar and DOI Flow, are absent from the menu.
