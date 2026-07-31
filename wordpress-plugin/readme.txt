=== WhenIsTheMatch Widget ===
Contributors: whenisthematch
Tags: football, soccer, fixtures, live scores, countdown
Requires at least: 6.0
Tested up to: 7.0
Requires PHP: 7.4
Stable tag: 1.0.0
License: GPLv2 or later

Display live football scores, upcoming fixture countdowns, and TV broadcast info for 800+ teams.

== Description ==

Keep your sports site visitors engaged with dynamic match updates! **WhenIsTheMatch Widget** lets you easily display your favorite team's next upcoming football match along with real-time score updates during game day.

Perfect for fan blogs, sports news portals, and local club websites looking for a clean, responsive match preview block.

### ⚽ Key Features
* **Next Match Countdown:** Dynamic timer counting down to kick-off.
* **Live Score Updates:** Real-time scores and goal tracking for ongoing matches.
* **Detailed Match Info:** Venue, referee details, and TV channel broadcasts (where available).
* **800+ Teams Supported:** Full coverage across major international leagues, cups, and club teams.
* **Multilingual Ready:** Adapts smoothly for international audiences.
* **Lightweight & Fast:** Built with performance in mind to avoid slowing down your site.

== Usage ==

Display the widget anywhere on your site (posts, pages, sidebar widgets) using shortcodes.

### Quick Start
`[whenisthematch team="spain"]`

### Parameters

* **team** *(required)*: The slug for the team you want to display (e.g., `real-madrid`, `arsenal`, `spain`). You can find team slugs on WhenIsTheMatch.com.
* **lang** *(optional)*: Widget language code. Options: `en` (default), `fr`, `es`, `it`, `de`, `pt`, `ja`, `hi`.
* **branding** *(optional)*: Set to `true` to display a subtle link below the widget. Enabling this helps support ongoing free plugin development! *(Default: `false`)*

### Shortcode Examples

**Basic Spanish Match Widget:**
`[whenisthematch team="barcelona" lang="es"]`

**Widget with Support Branding Enabled:**
`[whenisthematch team="chelsea" branding="true"]`

== Frequently Asked Questions ==

= Where can I find team slugs? =

1. Search for your team on [WhenIsTheMatch](https://whenisthematch.com).
2. Look at the end of the website address (URL). The slug is the last part!

* **Example URL:** `https://whenisthematch.com/team/spain`
* **Your Team Slug:** `spain`

== External Services ==

This plugin embeds match information from WhenIsTheMatch.

The widget loads content from:
https://whenisthematch.com

No account or API key is required.

== Screenshots ==

1. The widget displayed on a WordPress page.
2. The shortcode used to add a team's next match.

== Changelog ==

= 1.0.0 =
* Initial release.