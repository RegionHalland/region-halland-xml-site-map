# Visa en site-map

## Hur man använder Region Hallands plugin "region-halland-xml-site-map"

Nedan följer instruktioner hur du kan använda pluginet "region-halland-xml-site-map".


## Användningsområde

Denna plugin skapar en post-type som heter xml-site-map. Denna post_type är inte synlig i admin, men tillgänglig via archive-xml-site-map.php
```sh
http://[SITE-NAME]/xml-site-map
```


## Installation och aktivering

```sh
A) Hämta pluginen via Git eller läs in det med Composer
B) Installera Region Hallands plugin i Wordpress plugin folder
C) Aktivera pluginet inifrån Wordpress admin
```


## Hämta hem pluginet via Git

```sh
git clone https://github.com/RegionHalland/region-halland-xml-site-map.git
```


## Läs in pluginen via composer

Dessa två delar behöver du lägga in i din composer-fil

Repositories = var pluginen är lagrad, i detta fall på github

```sh
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/RegionHalland/region-halland-xml-site-map.git"
  },
],
```
Require = anger vilken version av pluginen du vill använda, i detta fall version 1.0.0

OBS! Justera så att du hämtar aktuell version.

```sh
"require": {
  "regionhalland/region-halland-xml-site-map": "1.0.0"
},
```


## Versionhistorik

### 1.0.0
- Första version