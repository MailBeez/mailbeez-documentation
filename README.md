# MailBeez V5 documentation

Edit the English and German Grav guides on the `V5` branch. Their shared source directory is `pages/03.documentation`. The standalone Helios site mounts this directory for its [English](https://docs.mailbeez.test/) and [German](https://docs.mailbeez.test/de) previews.

## Place a guide

1. Find the screen in BeezUI. Check the group and page order in `catalog/mailhive/app_dev/components/Data/Live/LiveNavigationProvider.php` and `components/Insight/Navigation.php`. Check labels in the English and German language files and in the page or module that renders the control. Modules can supply their own display name. Some screens depend on the edition, installed modules or permissions.
2. Edit both language files in the same Grav folder. Use the localized screen name for a screen guide and the reader’s task for a how-to. Keep the existing folder, slug, aliases and anchors used by other guides. In Markdown, link to the localized slug without a language prefix. Grav adds the active language.
3. Add the folder identity once under its parent in [navigation.v5.yaml](navigation.v5.yaml). Each entry has a `page` and can contain nested `items`. If the app orders siblings differently in one language, set `before` on the entry with that language code and the sibling’s folder identity. Its children move with it. Update the guide links on the parent page in both languages. A guide can appear under a different sidebar parent while keeping its published URL.
4. Put cross-product material such as Compatibility and Changelog under Resources. Put installers and extensions without a verified V5 screen under Legacy reference. Keep the shop versions, prerequisites and original procedures with those guides. On a restored tutorial or recipe, set `original_v4: true` in a translation that has a matching V4 article. Helios uses the version catalog to show its original instructions when the archive is available.

Place a ready-made flow in its app category under **Automation → MailBeez Flows**. The group’s `overview_anchor` links to the matching heading on the Automation page in each language. **Custom Flows** has its own guide directly under **Automation**.

For an Automation flow, open with the customer situation, the trigger and the choices that affect the email. Follow with a realistic shop example before the setup steps. Use the exact app flow name in the guide title and instructions. The V5 app defines these names in its language files under `UI_TRIGGER_MODULE_TITLE_*`. Use a matching short label in the sidebar entry and overview card. Check both languages in Helios at desktop and mobile widths. Use `module.plans_position: after_guide` in each translation to show the plan table after the instructions.

For a list of settings, put each exact app label in bold on its own line. Start the explanation on the next line. Use the same layout in both languages.

```markdown
- **Coupon validity**<br>
  Enter the number of days the recipient can use their code after the email is sent.
```

## Update hosted platform compatibility

Settings under **System → Configuration** apply to every supported shop system. Helios uses that sidebar branch to omit per-guide platform tables and to show hosted settings as managed by MailBeez Services in the Compatibility resource. Extensions with `/configbeez` URLs follow their own module compatibility data.

To omit the platform table from an individual V5 module guide, set
`module.show_compatibility: false` in both translations.

Use the store names on the matrix and the module guides. Shopify, WooCommerce, JTL-Shop and Shopware share one hosted feature set. Their installation guides describe the quote, consultation and connector handoff. Confirm connector availability with MailBeez Services.

Record merchant access once in [compatibility.v5.yaml](compatibility.v5.yaml), using the guide folder name without its numeric prefix. Several guides can share a package ID while exposing different settings. Check the hosted module inventory, the V5 module blueprint for `saas_superuser` and the restrictions in BeezUI’s `Extensions/Access.php` and `Support/ConfigurationAccess.php`. Use `supported` for verified hosted modules, `hidden` when the merchant cannot configure the module, and leave unconfirmed entries out. Keep shop-specific prerequisites in the guide.

## Refresh module card icons

The Helios card uses `card-identity.svg` from the target guide’s folder in both languages. To refresh the icons after a module or BeezUI palette change, run the exporter from this checkout with the path to Core’s `catalog/mailhive` and the standalone site’s route catalog.

```sh
php scripts/export-card-identities.php /path/to/catalog/mailhive /path/to/grav-mailbeez-docs/migration/catalog.json
```

The exporter reads module artwork, the BeezUI configuration directory and its installed Tailwind palette. For Extensions it uses the same display metadata as the app's Extensions table, including add-on group colors and integration brand colors. The docs show each module's standard colors independently of its status in a particular shop. The exporter puts the light and dark tiles side by side in each SVG. Helios displays the half for the selected theme. New guide folders or routes need an up-to-date catalog before export. After adding icons, clear the local Grav page cache with `bin/grav clearcache` from the site’s `public` directory.

## Verify locally

When merging a guide, keep its old language files as redirects.
Set `published: true`, `visible: false`, and `routable: false`.
Set `redirect` to the destination path and section in each language.
Grav supplies the language prefix. Update the sidebar and links to the new section.

Community module guides live in the V4 archive. Their former V5 pages contain only redirects.
Use the archived guide’s path in each language and remove its V5 navigation entry and overview card.

From the standalone Helios checkout, run `./scripts/rebuild-routes.sh` after adding pages, translations or route changes. This refreshes the route catalog and legacy redirect map using the local Grav installation. Run `./scripts/redirect-preview.sh` to serve the map locally. Use `python3 scripts/verify.py --help` for the V5 crawl and redirect verification options.

Check each language in Helios, including the sidebar, breadcrumb, language switch and links in the article. Check an old link on each legacy host when changing a route. Helios owns the shared navigation templates, the Changelog feed and the generated routing files.

## Publish to guide.mailbeez.com

**Push to GitHub `V5` only** when you edit guide text, translations, images stored in this repository, or sidebar entries that use existing navigation features. For example, moving a guide into an existing category is a documentation change. After checking the local preview, commit the files you want to publish and push `V5`. Every push to that branch asks Forge to deploy, including a README-only change.

**Push GitLab `main` first** when the documentation depends on a change to the guide application, such as a Twig template, stylesheet, navigation renderer or build script. For example, a new type of sidebar group needs theme support before a guide can use it. Test the two changes together, push the application change to GitLab `main`, then push the documentation to GitHub `V5`. Forge builds the guide from both branches. [Guide application on GitLab](https://gitlab.com/cloudbeez/mailbeez-guide)

### Verify the live update

1. Open the **Deploy MailBeez guide** run for your `V5` commit. A green run means Forge accepted the deployment request. [GitHub Actions runs](https://github.com/MailBeez/mailbeez-documentation/actions/workflows/deploy-guide.yml?query=branch%3AV5)
2. Open **Deployments** for the guide site and wait for the new deployment to succeed. The deployment log records the `V5` commit and the GitLab application commit (`Site`). Compare `V5` with the commit you pushed. If you also changed GitLab, compare `Site` as well. [Guide site in Forge](https://forge.laravel.com/cord/mailbeez/3524768)
3. Open the edited article at its public URL and look for a specific changed sentence or image. Use the language switch to check the other translation. For a sidebar change, expand the affected category and follow its link to the guide. [English guide](https://guide.mailbeez.com/) · [German guide](https://guide.mailbeez.com/de)

## Test the guides with a merchant

Start a first-time reader on the V5 documentation home page in their preferred language. Give them one task at a time. Let them use search or the sidebar and ask them to show where they found their answer. These tasks can all be completed from the documentation.

| Task | English prompt | Deutsche Aufgabe |
| --- | --- | --- |
| Connect SiteZen | You run a Shopify store and want to use SiteZen. How would you find out whether you can connect it? | Du betreibst einen Shopify-Shop und möchtest SiteZen nutzen. Wie findest du heraus, ob du es anbinden kannst? |
| Choose a Winback test customer | The first email waits 90 days and the flow looks back 120 days. Three customers’ latest orders shipped 80, 95 and 125 days ago. They meet the other conditions. Which customer would you test with, and why? | Die erste E-Mail hat 90 Tage Wartezeit. Der Flow prüft die letzten 120 Tage. Die jeweils letzte Bestellung von drei Kunden wurde vor 80, 95 oder 125 Tagen versendet. Die anderen Bedingungen sind erfüllt. Mit wem würdest du den Flow testen und warum? |
| Trace a review invitation | A buyer expected a review invitation yesterday. Where would you look first? What could you tell them if you found only a send time? What would you check if there were no entry? | Ein Käufer hat gestern eine Bewertungsanfrage erwartet. Wo würdest du nachsehen? Was kannst du ihm sagen, wenn du nur die Versandzeit findest? Was prüfst du, wenn es keinen Eintrag gibt? |

Keep the answers with the facilitator. For SiteZen, the reader should find MailBeez Services and recognize that the hosted account has no settings for this connection. For Winback, they should choose 95 days and explain why the other two orders fall outside the window. For the missing invitation, they should distinguish a recorded send from confirmed delivery and check the order status, waiting period and next run if there is no record.

Record the language, whether the reader finished unaided and the first place they went wrong or needed help. Keep their wording for anything they misunderstood. Revise that passage and repeat the same task with a new reader in that language.
