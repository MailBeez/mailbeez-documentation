---
# http://learn.getgrav.org/content/headers
title: "Background Processing"
module_subtitle: "Check active sending processes after an interrupted run"
slug: config_process_control
date: 26-03-2012
published: true
publish_date: 26-03-2012
# unpublish_date: 26-03-2012
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
    tag: [core]
# added collection selector

author:
    name: admin
metadata:
    author: admin
---

After an interrupted run, check whether another sending process is still active. These settings prevent two runs from processing email at the same time.

A processing run can finish without creating a message if nobody qualifies. An unfinished run is a different case. Check which of the two you are investigating before retrying.

Open **System → Configuration** and select **Background Processing**.

Compare the last start and completion time. For a missing campaign email, check [Sending & status](/sending-status) for a send record before starting another run.
