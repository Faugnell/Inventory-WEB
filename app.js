// Importer les modules nécessaires
const express = require('express');
const path = require('path');
const bodyParser = require('body-parser');
const homeRouter = require('./routes/index');

// Initialiser l'application Express
const app = express();

// Configuration des vues (si vous utilisez un moteur de template comme EJS)
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'ejs');

// Middleware pour parser les données du corps des requêtes
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());

// Définition des routes
app.use('/', homeRouter);

// Configuration des fichiers statiques
app.use(express.static(path.join(__dirname, 'public')));

// Gestion des erreurs 404
app.use((req, res, next) => {
    res.status(404).send('Page not found');
});

// Démarrage du serveur
const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
    console.log(`Server running on port ${PORT}`);
});