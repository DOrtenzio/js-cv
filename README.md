# js-cv
http://testingpages.rf.gd/api.php
GET

---

### **Campi del Form**

#### **1. Dati Personali**
- **`name_cognom`**: Nome e cognome dell'utente.
  ```html
  <input type="text" name="name_cognom" placeholder="Nome e Cognome">
  ```
- **`indirizzo`**: Indirizzo dell'utente.
  ```html
  <input type="text" name="indirizzo" placeholder="Indirizzo">
  ```
- **`data`**: Data di nascita dell'utente.
  ```html
  <input type="date" name="data" placeholder="Data di Nascita">
  ```

---

#### **2. Titoli Personali** (Campi dinamici, possono essere multipli)
- **`titolo[]`**: Titolo conseguito (es. Laurea, Diploma).
  ```html
  <input type="text" name="titolo[]" placeholder="Titolo">
  ```
- **`anno[]`**: Anno di conseguimento del titolo.
  ```html
  <input type="date" name="anno[]" placeholder="Anno">
  ```
- **`luogo_titolo[]`**: Luogo di conseguimento del titolo.
  ```html
  <input type="text" name="luogo_titolo[]" placeholder="Luogo">
  ```

---

#### **3. Esperienze Lavorative** (Campi dinamici, possono essere multipli)
- **`posto[]`**: Posizione lavorativa (es. Tecnico, Manager).
  ```html
  <input type="text" name="posto[]" placeholder="Posto">
  ```
- **`durata[]`**: Durata dell'esperienza lavorativa (in anni).
  ```html
  <input type="number" name="durata[]" placeholder="Durata">
  ```
- **`luogo_lavoro[]`**: Luogo di lavoro.
  ```html
  <input type="text" name="luogo_lavoro[]" placeholder="Luogo">
  ```

---
