# Utenza

Utenza è un progetto PHP che implementa un sistema di autenticazione e registrazione degli utenti utilizzando un database MySQL.

## Descrizione

Questo progetto fornisce un'interfaccia web per gestire l'autenticazione degli utenti e consentire loro di effettuare il login o registrarsi come nuovi utenti. È stato sviluppato utilizzando il linguaggio PHP e il database MySQL.

## Funzionalità

Il progetto "Utenza" offre le seguenti funzionalità:

- Login: gli utenti possono inserire le proprie credenziali (username e password) per accedere all'area riservata.
- Registrazione: gli utenti possono creare un nuovo account fornendo le informazioni richieste (nome, cognome, username, email e password).
- Logout: gli utenti possono effettuare il logout dal proprio account per terminare la sessione corrente.

## Requisiti

Prima di eseguire il progetto, assicurati di avere i seguenti requisiti:

- Server web (ad esempio Apache) con supporto per PHP
- Server MySQL o compatibile per la gestione del database degli utenti

## Installazione

1. Clona o scarica il repository su una cartella del tuo server web.
2. Crea un database MySQL chiamato "Utenza".
3. Importa il file `database.sql` nel tuo database per creare la tabella degli utenti.
4. Apri il file `connect.php` e modifica le seguenti variabili per adattarle alla tua configurazione di database:
   - `$servername`: l'indirizzo del server MySQL
   - `$username`: l'username per accedere al database
   - `$password`: la password per accedere al database
   - `$dbname`: il nome del database creato in precedenza
5. Avvia il tuo server web e accedi all'applicazione tramite il tuo browser.

## Contributi

Sono benvenuti contributi e suggerimenti per migliorare il progetto. Se desideri contribuire, segui questi passaggi:

1. Forka il repository su GitHub.
2. Crea un nuovo branch con una descrizione significativa del tuo contributo.
3. Effettua le modifiche nel tuo branch.
4. Invia una pull request indicando chiaramente le modifiche apportate e il motivo per cui dovrebbero essere accettate.

## Licenza

Questo progetto è distribuito con la licenza MIT.