---
title: "Automatic processing"
module_subtitle: "Schedule regular processing for a self-hosted MailBeez installation"
slug: automatic-processing
template: docs
visible: true
published: true
taxonomy:
    category: [docs]
---

MailBeez Services manages automatic processing for hosted accounts. If MailBeez runs on your own shop server, set up regular processing under **System → Configuration → Automatic processing** so emails can go out overnight as well. An email that becomes due just after a run has to wait for the next one inside its sending window.

1. Open **Hosting cronjobs** and find **Cronjob URL**. Use the URL provided for this shop. It contains the token that lets the scheduler start processing.
2. In your hosting panel, schedule a recurring HTTP GET request to that URL. Choose an interval your host supports and that falls within your modules’ sending windows.
3. After the first scheduled run, check [Sending & status](/sending-status) for the messages you expected. A completed run can have no sends if no recipient qualified.

To restrict days or hours for one flow, open [Schedule sending by module](/configbeez/config_cron_advanced).