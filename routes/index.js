// Importer express
const express = require('express');

// Créer un routeur express
const router = express.Router();

// Définir la route pour afficher "Hello World"
router.get('/', (req, res) => {
    res.send('Hello World');
});

// Exporter le routeur
module.exports = router;