# Ovladače
Ovladače anglicky *drivers* jsou nástroje, které slouží jako vrsta mezi Operačním systémem a samotným hardwarem.
Operační systém používá ovladače doslova k ovládání hardwaru. Velkou část běžných ovladačů má v sobě operační systém již předinstalovanou a další velkou část je schopný si Windows stáhnout z aktualizací.

## Aktuální ovladače
Seznam ovladačů zobrazíme pomocí příkazu [devmgmt.msc](/service/win/cmd).

![Správce zařízení](/service/win/img/devmgmt.png)

## Identifikace chyby
Pokud seznam ovladačů obsahuje chyby, zobrazí se jako vykříčníky. 

Každý vykřičník (až na vzácné výjimky) je potřeby vyřešit instalací ovladačů.

Před hledáním ovladačů manuálně zkontrolujeme [aktualizace windows](/service/win/cmd).

## Stažení ovladače
Ovladače lze zjistit a stáhnout z internetu pokud známe **značku** a **modelové označení** problémového hardwaru. Pokud k počítači není nic připojené tak veškerý hardware hledáme podle značky a označení **notebooku** případně podle značky a označení **základní desky**.

Stránky renomovaných výrobců (*Dell*, *HP*, *Lenoovo*) nabízejí většinou systém automatické aktualizace. Pokud to jde je dobré ho využít.

Ovladače nejlépe stahujeme ze stránek výrobce. Obvykle stačí do **Google** napsat "*{značku}* *{modelové označení}* drivers" (např. Dell 780 drivers). Vy výsledcích pak hledáme požadované ovladače.

### Obvyklé problémy ovladače
1. MEI - tj. Intel Management Engine
1. Chipset
1. Card reader
1. Bluetooth

## Identifikování neidentifikovatelného
Pokud se ovladač nedaří identifikovat je potřeba získat jeho **ID hardwaru** a zkopírovat ho do vyhledávače **Google**. ID hardwaru se získá

1. Kliknutím na problémový ovladač pravým tlačítkem myši
1. Kliknutí na záložku *Podrobnosti*
1. Z roletky *Vlastnosti* vybrat *ID hardwaru*
1. Kliknutím na nejdelší nebo nejkratší řádek pravým tlačítkem myši
1. Vybrat *Kopírovat*

Nejlepší zdroje informací při vyhledávání ID hardwaru jsou:

### Diskuzní fóra
Můžeme si přečíst rady ostatních uživatelů, ideálně vyčíst z fóra o jaký hardware se jedná a jakým postupem můžeme vykřičník odstranit. Někdy fórum obsahuje odkaz pro stažení. Odkazy ke stažení zkoušíme pokud je fórum důvěryhodné tj. doménu vlastní nějaký renomovaný výrobce jako např. *Intel*, *Asus*, *Acer*, *Dell*, *HP*, *Lenovo* atp.

### Stránky typu driverscape.com
Stránky, které nabízejí aplikace na **hromadnou aktualizaci** ovladačů. Nikdy z nich nestahujeme a neinstalujeme žádnou aplikaci na hromadnou aktualizaci ovladačů. Snažíme se díky nim pouze identifikovat hardware podle **ID hardwaru**
