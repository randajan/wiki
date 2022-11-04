# Čistá instalace

## Klonování
Pomocí programu **Macrium Reflect** na disk naklonuj operační systém.

Klony se nacházejí na síťovém disku **//nas.itcan.cz/images/templates**

Při výběru operačního systému je třeba vzít v úvahu:
- Licence na Win7 platí i pro Win8, Win10 a Win11.
- Licence na Win PRO platí na Win HOME i na Win PRO
- Licence na Win HOME platí jen na Win HOME
- LEGACY = pro staré počítače, které neumí UEFI
- UEFI = pouze pokud počítač jistě umí UEFI

Hlavní oddíl (svazek) musí být situován na disku tak, aby bylo možné ho následně rozšířit. Ideálně by měl být poslední, případně je dobré ho rovnou rozšířit klonovacím nástrojem (macrium má funkci **Fill**)

## Implantace
- Po prvním připojení disku do počítače je potřeba **zkontrolovat aktivaci**, případně **zadat licenční klíč**
- Zkontrolovat **[diskmgmt.msc](/service/win/cmd)** - pokud je potřeba rozšířit, rozdělit a nebo jinak upravit oddíly na disku.
- Je potřeba spustit aktualizaci a celou jí řádně dokončit
- Po dokončení celkové aktualizace vč. restartů je potřeba [zkontrolovat ovladače](/service/win/drivers)


Tímto je čistá instalace dokončena