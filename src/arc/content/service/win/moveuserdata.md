# Přesun dat uživatele

1. Disk ze kterého chceme získat data (dále **zdrojový disk**) připojíme do stejného počítače jako disk na který chceme data umístit (dále **cílový disk**). Případně pokud nemáme jinou možnost k přesunu použijeme síťové úložiště nebo USB flash disk.

1. Zkontrolujeme pomocí [diskmgmt.msc](/service/win/cmd) oddíly na zdrojovém disku. Hledáme oddíl kde byl umístěn původní systém Windows (dále **systémový oddíl**). Případně zkontrolujeme jestli na disku nejsou další oddíly na kterých by mohla být uživatelská data (dále **datové oddíly**)

1. Pro všechny **datové oddíly** kopírujeme veškerá nalezená data, pokud nejsme domluveni jinak.

1. Prohlédneme kořen **systémového oddílu** jestli nenajdeme extra uživatelská data. Obvyklý obssah kořenu systémového oddílu Windows jsou složky **Program files**, **Windows** a **Users**. Uživatelská data jsou obvykle na první pohled odlišná. Často jsou tyto složky pojmenované po uživateli, případně jsou částé názvy jako **Záloha**, **OldPC**, **Backup** atp.

1. Prohlédneme složku **Users** v kořenu **systémového oddílu**. Kopírujeme obsah všech složek ve složce **Users** kromě složek **Veřejné** a složky, které začínají předponou **default**. Pokud se objeví problém se zabezpečením [upravíme zabezpečení](/service/win/securitybypass)
