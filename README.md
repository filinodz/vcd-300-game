# 🎮 VCD-300-GAME

<div align="center">

![VCD-300 Logo](https://img.shields.io/badge/VCD--300-GAME-00ffff?style=for-the-badge&logo=gamepad&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![EmulatorJS](https://img.shields.io/badge/EmulatorJS-FF6B6B?style=for-the-badge&logo=nintendo&logoColor=white)

**🕹️ Simulation authentique du légendaire système VCD-300**

*Plongez dans une collection de 300 jeux classiques avec une interface fidèle aux consoles des années 2000*

[🚀 Démo Live](https://vcd.gamer.gd) • [📖 Documentation](#installation) • [🐛 Issues](https://github.com/filinodz/vcd-300-game/issues) • [⭐ Star ce projet](https://github.com/filinodz/vcd-300-game)

</div>

---

## 🌟 Aperçu

VCD-300-GAME est une simulation web authentique d'une console de jeux rétro fictive. Le projet recrée fidèlement l'expérience d'utilisation d'une console des années 2000 avec :

- **300 jeux NES classiques** parfaitement émulés
- **Interface utilisateur rétro-futuriste** avec effets visuels immersifs
- **Navigation par pages** comme sur les vraies consoles multi-jeux
- **Design 100% responsive** optimisé pour tous les appareils
- **Contrôles tactiles** adaptés aux smartphones et tablettes

### 📱 Captures d'écran

<div align="center">

| 🏠 Écran d'accueil | 🎮 Menu des jeux | 🕹️ En jeu |
|:---:|:---:|:---:|
| ![Intro](/screenshots/intro.png) | ![Menu](/screenshots/gamemenu.png) | ![Gaming](/screenshots/gaming.png) |

</div>

---

## ✨ Fonctionnalités

### 🎨 **Interface Immersive**
- **Écran d'intro** avec animations et effets de particules
- **Design cyberpunk** avec dégradés animés et effets de glow
- **Typography rétro** utilisant Orbitron et Press Start 2P
- **Transitions fluides** entre les écrans

### 🎮 **Émulation Parfaite**
- **Émulateur NES** basé sur EmulatorJS
- **300 jeux classiques** incluant Mario, Tetris, Contra, etc.
- **Sauvegarde automatique** des états de jeu
- **Performance optimisée** pour une expérience fluide

### 📱 **Responsive Design**
- **Adaptation automatique** à toutes les tailles d'écran
- **Contrôles tactiles** optimisés pour mobile
- **Navigation intuitive** avec touches ou gestes
- **Support des encoches** et safe-areas

### 🔧 **Fonctionnalités Avancées**
- **Navigation par pages** (30 pages de 10 jeux)
- **Recherche par nom** de jeu
- **Gestion des états** de l'émulateur
- **Nettoyage automatique** des ressources

---

## 🚀 Installation

### Prérequis
- **Serveur web** (Apache, Nginx, ou serveur de développement)
- **PHP 7.4+** 
- **Navigateur moderne** avec support WebAssembly

### Installation complète

#### 1️⃣ Cloner le projet principal
```bash
# Cloner le repository VCD-300-GAME
git clone https://github.com/filinodz/vcd-300-game.git
cd vcd-300-game
```

#### 2️⃣ Installer EmulatorJS
```bash
# Cloner EmulatorJS dans le dossier du projet
git clone https://github.com/EmulatorJS/EmulatorJS.git emulatorjs

# Ou télécharger directement depuis GitHub
# https://github.com/EmulatorJS/EmulatorJS/archive/refs/heads/main.zip
# Et extraire dans le dossier 'emulatorjs/'
```

#### 3️⃣ Ajouter les ROMs
```bash
# Créer le dossier roms si nécessaire
mkdir -p emulatorjs/roms/nes

# Télécharger le fichier roms.zip depuis les releases du projet
# https://github.com/filinodz/vcd-300-game/releases

# Extraire les ROMs dans le bon dossier
unzip roms.zip -d emulatorjs/roms/nes/
```

#### 4️⃣ Lancement
```bash
# Si vous utilisez un serveur local PHP
php -S localhost:8000

# Ou déployez directement sur votre serveur web
```

### 📁 Structure finale du projet

```
vcd-300-game/
├── 📁 emulatorjs/           # ← À installer séparément
│   ├── 📁 data/            # Données EmulatorJS
│   ├── 📁 roms/            # ← ROMs à ajouter
│   │   └── 📁 nes/         # ROMs NES (300 jeux)
│   ├── 📄 loader.js        # Loader EmulatorJS
│   └── 📄 ...              # Autres fichiers EmulatorJS
├── 📁 img/                 # Images et backgrounds
├── 📄 index.php            # Interface principale
├── 📄 README.md            # Documentation
├── 📄 roms.zip             # ← Archive des ROMs (releases)
└── 📄 .gitignore          # Fichiers ignorés
```

### ⚠️ Notes importantes

#### **EmulatorJS**
- **Non inclus** dans le repository principal (taille importante)
- **Installation requise** depuis le [repository officiel](https://github.com/EmulatorJS/EmulatorJS)
- **Version recommandée** : Latest stable release

#### **ROMs**
- **Non incluses** dans le repository principal (droits d'auteur)
- **Disponibles** dans les [Releases](https://github.com/filinodz/vcd-300-game/releases) du projet
- **300 jeux NES** dans l'archive `roms.zip`
- **Extraction requise** dans `emulatorjs/roms/nes/`

#### **Alternative rapide**
Si vous voulez tout installer d'un coup :

```bash
# Script d'installation automatique (Linux/Mac)
curl -sSL https://raw.githubusercontent.com/filinodz/vcd-300-game/main/install.sh | bash

# Ou téléchargez install.bat pour Windows
```

---

## 🎯 Utilisation

### Navigation
- **🖱️ Desktop** : Utilisez les flèches ← → pour naviguer entre les pages
- **📱 Mobile** : Touchez les flèches à l'écran ou swipez
- **⌨️ Clavier** : Échap pour revenir au menu depuis un jeu

### Lancement d'un jeu
1. Cliquez sur "▶ DÉMARRER LE SYSTÈME"
2. Parcourez les pages de jeux
3. Cliquez sur le jeu souhaité
4. Profitez de l'expérience rétro !

---

## 🛠️ Configuration

### Ajouter des jeux

Pour ajouter d'autres jeux, modifiez le tableau `$GAMES` dans `index.php` :

```php
$GAMES = [
    301 => [
        'name' => 'Nouveau Jeu', 
        'file' => 'emulatorjs/roms/nes/nouveau-jeu.nes', 
        'core' => 'nes'
    ],
    // ...
];
```

**Important** : Assurez-vous que le fichier ROM existe dans `emulatorjs/roms/nes/`

### Dépannage courant

#### ❌ **EmulatorJS ne se charge pas**
```bash
# Vérifier que EmulatorJS est bien installé
ls -la emulatorjs/
# Doit contenir: data/, loader.js, etc.

# Réinstaller si nécessaire
rm -rf emulatorjs/
git clone https://github.com/EmulatorJS/EmulatorJS.git emulatorjs
```

#### ❌ **Jeux ne se lancent pas**
```bash
# Vérifier que les ROMs sont présentes
ls -la emulatorjs/roms/nes/
# Doit contenir: 1-1942.nes, 2-1943.nes, etc.

# Extraire les ROMs si nécessaire
unzip roms.zip -d emulatorjs/roms/nes/
```

#### ❌ **Erreur 404 sur les ROMs**
- Vérifiez les **permissions** des fichiers
- Assurez-vous que le **serveur web** peut lire les fichiers
- Vérifiez les **chemins** dans le tableau `$GAMES`

### Personnaliser l'interface

- **Couleurs** : Modifiez les variables CSS dans la section `<style>`
- **Fonts** : Changez les imports Google Fonts
- **Animations** : Ajustez les keyframes CSS
- **Backgrounds** : Remplacez les images dans `/img/`

### Optimisations serveur

Pour de meilleures performances :

```apache
# .htaccess (Apache)
<IfModule mod_deflate.c>
    AddOutputFilterByType DEFLATE text/html text/css application/javascript
</IfModule>

<IfModule mod_expires.c>
    ExpiresActive On
    ExpiresByType application/javascript "access plus 1 month"
    ExpiresByType text/css "access plus 1 month"
</IfModule>
```

---

## 🤝 Contribution

Les contributions sont les bienvenues ! Voici comment participer :

1. **Fork** le projet
2. **Créez** votre branche (`git checkout -b feature/nouvelle-fonctionnalite`)
3. **Commitez** vos changements (`git commit -m 'Ajout nouvelle fonctionnalité'`)
4. **Push** vers la branche (`git push origin feature/nouvelle-fonctionnalite`)
5. **Ouvrez** une Pull Request

### 📋 TODO

- [ ] Système de favoris
- [ ] Mode plein écran natif
- [ ] Support d'autres consoles (Game Boy, SNES)
- [ ] Système de scores en ligne
- [ ] Mode multijoueur local
- [ ] PWA (Progressive Web App)

---

## 📜 Crédits & Remerciements

### 👨‍💻 **Développement**
- **[FilinoDZ](https://github.com/filinodz)** - *Créateur et développeur principal*

### 🎮 **Émulation**
- **[EmulatorJS](https://github.com/EmulatorJS/EmulatorJS)** - *Moteur d'émulation JavaScript*
  - Équipe EmulatorJS pour leur travail exceptionnel
  - Support WebAssembly pour les performances

### 🎨 **Design & Assets**
- **[Google Fonts](https://fonts.google.com/)** - *Polices Orbitron et Press Start 2P*
- **Inspiration** - Consoles rétro et design cyberpunk des années 2000

### 🕹️ **Jeux**
- **Nintendo** - *Propriétaire original des jeux NES*
- **Développeurs des jeux** - *Créateurs des classiques inclus*

> ⚠️ **Note légale** : Ce projet est à des fins éducatives et de préservation. Assurez-vous de posséder les ROMs que vous utilisez.

---

## 📄 Licence

Ce projet est sous licence **MIT**. Voir le fichier [LICENSE](LICENSE) pour plus de détails.

```
MIT License - Copyright (c) 2025 FilinoDZ
```

---

## 🌟 Support

Si ce projet vous plaît :

- ⭐ **Star** le repository
- 🐛 **Signalez** les bugs via les [Issues](https://github.com/filinodz/vcd-300-game/issues)
- 💬 **Partagez** avec vos amis gamers
- 🚀 **Contribuez** au développement

### 📞 Contact

- **GitHub** : [@filinodz](https://github.com/filinodz)
- **Email** : [filinodz@gmail.com]

---

<div align="center">

**🎮 Fait avec ❤️ pour la communauté rétro-gaming**

*VCD-300-GAME - Quand la nostalgie rencontre la technologie moderne*

![Visitors](https://visitor-badge.laobi.icu/badge?page_id=filinodz.vcd-300-game)
![GitHub last commit](https://img.shields.io/github/last-commit/filinodz/vcd-300-game)
![GitHub stars](https://img.shields.io/github/stars/filinodz/vcd-300-game?style=social)

</div>
