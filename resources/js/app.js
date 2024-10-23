import './bootstrap';

import "~resources/scss/app.scss";
import "~resources/scss/partials/header.scss";
import "~resources/scss/partials/hero.scss";
import "~resources/scss/partials/main.scss";
import "~resources/scss/partials/show.scss";
import "~resources/scss/partials/banner-icons.scss";
import "~resources/scss/partials/footer.scss";

// Direttiva per la gestione delle immagini
import.meta.glob([
    '../img/**'
]);
