<?php

/* Descrizione :

Dobbiamo creare una web-app che permetta di leggere una lista di dischi presente nel nostro server.

Stack :

Html, CSS, VueJS (importato tramite CDN), axios, PHP

Consigli :

Nello svolgere l’esercizio seguite un approccio graduale.
Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a comunicare correttamente con il vostro script PHP (le vostre “API”).
Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.

Bonus :

Al click su un disco, recuperare e mostrare i dati del disco selezionato.
 */

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP disks</title>
      <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <h1>Lista di Dischi :</h1>
    <div id="app">
        <div class="card" v-for="disk in diskList" @click="showInfo(disk)"> 
            <h3>{{disk.title}}</h3>
            <img :src="`${disk.poster}`" alt="IMG">
            <div v-if="selectedDisk == disk && checkInfo==true">
                <ul>
                    <li>{{disk.author}}</li>
                    <li>{{disk.genre}}</li>
                    <li>{{disk.year}}</li>
                </ul>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="./assets/js/script.js"></script>
</body>
</html>