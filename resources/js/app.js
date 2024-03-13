import './bootstrap';

import '~resources/scss/app.scss'

// Import all of Bootstrap's JS
import * as bootstrap from 'bootstrap'

// serve per processare i percorsi affinchè processi tutte le immagini presenti nella cartella resources/img/
import.meta.glob(
    [
    '../img/**'
    ]
)