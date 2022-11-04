# BIOS a bootmenu

**BIOS** (dnes UEFI) je firmware (*FW*) nahraný na základní desce počítače, který umožňuje úpravy jeho nejzákladnější nastavení.

Každý takový firmware má různé nastavení. Některé jsou stejné jiné jsou specifické pro model nebo značku.

Kancelářské počítače mají obvykle mnohem širší možnosti nastavení.

BIOS zejména umožňuje nastavit spouštění počítače tj. ze kterého zdroje se bude načítat operační systém.

**Bootmenu** pak slouží pouze k dočasné změně zdroje ze kterého se bude načítač operační systém.

Některé počítače umožňují jako součástí Bootmenu vstup do BIOSu

## Změna spuštění počítače

Každý počítač má trochu jiný postup. Nesmíme přitom zapomínat, že počítače vyrobené před rokem 2010 nemusí podporovat **UEFI** a naopak počítače vyrobené po roce 2018 nemusí podporovat tzv. **Legacy**. Jedná se o dva různé způsoby načítání operačního systému.

### Obvyklý postup
Opakované stisknutí určité klávesy krátce po spuštění počítače**

|Značka počítače|Otevře BIOS|Otevře Bootmenu|
|-|-|-|
|Dell|F2|F12|
|HP|F10|F9|

Další obvyklé klávesy pro změnu spuštění počítače jsou **Delete**, **Esc** a **Enter**

### Lenovo One Key recovery
Lenovo má ke vstupu do BIOSu speciální **malé tlačítko** obvykle **blízko primárního vypínače** počítače. Toto tlačítko je potřeba stisknout když je **počítač vypnutý**. Sám se zapne a spustí se s rozšířeným nastavením spuštění.

### UEFI a fastboot
Kombinace firmwaru UEFI a nastavení fastboot může způsobit, že nelze spouštěcí proces přerušit.
Pokud je nainstalován operační systém Windows je možné se do firmware UEFI dostat přímo ze spuštěného operačního systému. Stačí proto
1. Stisknout klávesu **Shift** a kliknout ve windows na tlačítko **Restartovat**
1. Kliknout na **Odstranit potíže**
1. Kliknout na **Upřesnit možnosti**
1. Kliknout na **Nastavení firmwaru UEFI**

## Secure boot
Pokud zdroj který se snažíme bootovat hlásí chybu zabezpečení je pravděpodobně zapnutý v BIOSu **Secure boot**. Podle potřeby ho můžeme dočasně deaktivovat.

