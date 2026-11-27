---
# http://learn.getgrav.org/content/headers
title: "Zen-Cart-Kontofreigabe"
module_subtitle: "Vor dem Versand den Freigabestatus von Zen-Cart-Konten prüfen"
slug: filter_check_customers_authorization_zencart
date: 15-12-2016
published: true
publish_date: 15-12-2016
template: docs
# theme: false
visible: true
summary:
    enabled: true
    format: short
    size: 128
taxonomy:
    migration_status: done
    category: [docs]
    tag: [pro, "[ZenCart] Prüfung der Kunden-Authorisierung"]
module:
    code: 'filter_check_customers_authorization_zencart'
    category: [filterbeez]
    compatiblity: [comp_zencart]
    pro: 'pro'
    cert: 'true'      


---

[doc-callout type="note" title="Früheres Filtermodul"]
Die Filter für deinen V5-Shop findest du unter [Zusatzmodule](/extensions/zusatzmodule). [Zur Referenz für ältere Versionen](/legacy).
[/doc-callout]

<span id="stellt-sicher-dass-nur-au"></span>Aktiviere diesen Filter in der früheren Zen-Cart-Integration, wenn nur freigegebene Kunden MailBeez-E-Mails erhalten sollen. Der erforderliche Autorisierungsstatus lautet `approved`. Prüfe vor dem Kampagnenstart ein freigegebenes und ein noch nicht freigegebenes Konto.

Nutze ein Konto mit bekanntem Freigabestatus. Daran kannst du nachvollziehen, wie der frühere Zen-Cart-Filter einen ansonsten passenden Empfänger behandelt.
