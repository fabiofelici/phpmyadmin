<?php
/* $Id$ */

$charset = 'iso-8859-2';
$text_dir = 'ltr';
$left_font_family = 'verdana, "arial ce", arial, helvetica, geneva, sans-serif';
$right_font_family = '"arial ce", arial, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Tera, Peta, Exa
$byteUnits = array('bajt�w', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Nie', 'Pon', 'Wto', '�ro', 'Czw', 'Pi�', 'Sob');
$month = array('Sty', 'Lut', 'Mar', 'Kwi', 'Maj', 'Cze', 'Lip', 'Sie', 'Wrz', 'Pa�', 'Lis', 'Gru');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y, %H:%M';

$strAPrimaryKey = 'Do %s dodany zosta� klucz podstawowy';
$strAccessDenied = 'Brak dost�pu';
$strAction = 'Dzia�anie';
$strAddDeleteColumn = 'Dodanie/usuni�cie p�l';
$strAddDeleteRow = 'Dodanie/usuni�cie wierszy kryteri�w';
$strAddNewField = 'Dodanie nowego pola';
$strAddPriv = 'Dodanie nowych uprawnien';
$strAddPrivMessage = 'Nowe uprawnienia zosta�y dodane.';
$strAddSearchConditions = 'Dodanie warunk�w przeszukiwania (warunek dla "where"):';
$strAddToIndex = 'Dodanie &nbsp;%s&nbsp;kolumn do indeksu ';
$strAddUser = 'Dodanie nowego u�ytkownika';
$strAddUserMessage = 'Nowy u�ytkownik zosta� dodany.';
$strAffectedRows = 'Zmodyfikowanych rekord�w:';
$strAfter = 'Po %s';
$strAfterInsertBack = 'Powr�t';
$strAfterInsertNewInsert = 'Wstawienie nowego rekordu';
$strAll = 'Wszystko';
$strAllTableSameWidth = 'wy�wietli� wszystkie tabele z tak� sam� szeroko�ci�?';
$strAlterOrderBy = 'Sortowanie tabeli wg';
$strAnIndex = 'Do %s dodany zosta� indeks';
$strAnalyzeTable = 'Analizowanie tabeli';
$strAnd = 'Oraz';
$strAny = 'Dowolny';
$strAnyColumn = 'Dowolna kolumna';
$strAnyDatabase = 'Dowolna baza danych';
$strAnyHost = 'Dowolny host';
$strAnyTable = 'Dowolna tabela';
$strAnyUser = 'Dowolny u�ytkownik';
$strAscending = 'Rosn�co';
$strAtBeginningOfTable = 'Na pocz�tku tabeli';
$strAtEndOfTable = 'Na ko�cu tabeli';
$strAttr = 'Atrybuty';

$strBack = 'Powr�t';
$strBeginCut = 'POCZ�TEK CUT';
$strBeginRaw = 'POCZ�TEK RAW';
$strBinary = ' Binarne ';
$strBinaryDoNotEdit = ' Binarne - nie do edycji ';
$strBookmarkDeleted = 'Zapami�tane zapytanie SQL zosta�o usuni�te.';
$strBookmarkLabel = 'Nazwa';
$strBookmarkQuery = 'Zapami�tane zapytanie SQL';
$strBookmarkThis = 'Zapami�tanie zapytania SQL';
$strBookmarkView = 'Tylko do pokazania';
$strBrowse = 'Przegl�danie';
$strBzip = '".bz2"';

$strCantLoadMySQL = 'nie mo�na za�adowac modu�u MySQL,<br />prosz� sprawdzi� konfiguracj� PHP.';
$strCantLoadRecodeIconv = 'Nie uda�o si� za�adowa� rozszerze� iconv lub recode, kt�re s� niezb�dne do konwersji kodowania znak�w, skonfiguruj php tak, by m�g� u�ywa� tych rozszerze� albo zablokuj konwersj� kodowania znak�w w phpMyAdminie.';
$strCantRenameIdxToPrimary = 'Nie mo�na zmieni� nazwy indeksu na PRIMARY!';
$strCantUseRecodeIconv = 'Nie uda�o si� u�y� ani funkcji iconv, ani libiconv, mimo �e rozszerzenia zg�aszaj� si� jako za�adowane. Zprawd� swoj� konfiguracj� php.';
$strCardinality = 'Moc';
$strCarriage = 'Znak powrotu: \\r';
$strChange = 'Zmiana';
$strChangeDisplay = 'Wybierz wy�wietlane pole';
$strChangePassword = 'Zmiana has�a';
$strCharsetOfFile = 'System kodowanie znak�w dla pliku:';
$strCheckAll = 'Zaznaczenie wszystkich';
$strCheckDbPriv = 'Sprawdzanie uprawnie� bazy danych';
$strCheckTable = 'Sprawdzanie tabeli';
$strChoosePage = 'Prosz� wybra� stron� do edycji';
$strColComFeat = 'Wy�wietlanie komentarzy dla kolumn';
$strColumn = 'Kolumna';
$strColumnNames = 'Nazwy kolumn';
$strComments = 'Komentarze';
$strCompleteInserts = 'Pe�ne dodania';
$strConfigFileError = 'phpMyAdmin nie zdo�a� odczyta� twojego pliku konfiguracj!<br />Mo�e si� to zdarzy�, je�li php znajdzie w nim b��d sk�adniowy lub nie mo�e znale�� tego pliku.<br />Prosz� wywo�a� bezpo�rednio plik konfiguracyjny u�ywaj�c poni�szego linku i odczyta� otrzymane komunikat(y) o b��dach. W wi�kszo�ci przypadk�w brakuje gdzie� cudzys�owu lub �rednika.<br />Je�eli otrzymasz pust� stron�, wszystko jest w porz�dku.';
$strConfigureTableCoord = 'Prosz� skonfigurowa� wsp�rz�dnie dla tabeli %s';
$strConfirm = 'Czy na pewno to zrobi�?';
$strCookiesRequired = 'Odt�d musi by� w��czona obs�uga "cookies".';
$strCopyTable = 'Skopiuj tabel� do (bazadanych<b>.</b>tabela):';
$strCopyTableOK = 'Tabela %s zosta�a skopiowana do %s.';
$strCreate = 'Utworzenie';
$strCreateIndex = 'Utworzenie indeksu dla %s kolumn';
$strCreateIndexTopic = 'Utworzenie nowego indeksu';
$strCreateNewDatabase = 'Utworzenie nowej bazy danych';
$strCreateNewTable = 'Utworzenie nowej tabeli dla bazy danych %s';
$strCreatePage = 'Utworzenie nowej strony';
$strCreatePdfFeat = 'Tworzenie PDF-�w';
$strCriteria = 'Kryteria';

$strData = 'Dane';
$strDataOnly = 'Tylko dane';
$strDatabase = 'Baza danych ';
$strDatabaseHasBeenDropped = 'Baza danych %s zosta�a usuni�ta.';
$strDatabaseWildcard = 'Baza danych (dozwolone maski):';
$strDatabases = 'bazy danych';
$strDatabasesStats = 'Statystyki baz danych';
$strDefault = 'Domy�lnie';
$strDelete = 'Skasowanie';
$strDeleteFailed = 'Kasowanie nie powiod�o sie!';
$strDeleteUserMessage = 'Usunales uzytkownika  %s.';
$strDeleted = 'Rekord zosta� skasowany';
$strDeletedRows = 'Skasowane rekordy:';
$strDescending = 'Malej�co';
$strDisabled = 'wy��czone';
$strDisplay = 'Poka�';
$strDisplayFeat = 'Funkcje wy�wietlania';
$strDisplayOrder = 'Kolejno�� wy�wietlania:';
$strDisplayPDF = 'Wy�wietl schemat PDF';
$strDoAQuery = 'Wykonaj "zapytanie przez przyk�ad" (znak globalny: "%")';
$strDoYouReally = 'Czy na pewno wykona� ';
$strDocu = 'Dokumentacja';
$strDrop = 'Usuni�cie';
$strDropDB = 'Usuni�cie bazy danych %s';
$strDropTable = 'Usuni�cie tabeli';
$strDumpXRows = 'Zrzu� %s wierszy zaczynaj�c od wiersza %s.';
$strDumpingData = 'Zrzut danych tabeli';
$strDynamic = 'zmienny';

$strEdit = 'Edycja';
$strEditPDFPages = 'Edycja stron PDF';
$strEditPrivileges = 'Edycja uprawnie�';
$strEffective = 'Efektywne';
$strEmpty = 'Wyczyszczenie';
$strEmptyResultSet = 'MySQL zwr�ci� pusty wynik (np. zero rekord�w).';
$strEnabled = 'w��czone';
$strEnd = 'Koniec';
$strEndCut = 'KONIEC CUT';
$strEndRaw = 'KONIEC RAW';
$strEnglishPrivileges = ' Uwaga: Uprawnienia MySQL s� oznaczone w j�z. angielskim ';
$strError = 'B��d';
$strExplain = 'Wyja�nienie SQL';
$strExport = 'Eksport';
$strExportToXML = 'Eksport do formatu XML';
$strExtendedInserts = 'Rozszerzone dodania';
$strExtra = 'Dodatkowy';

$strField = 'Pole';
$strFieldHasBeenDropped = 'Pole %s zosta�o usuni�te';
$strFields = 'Pola';
$strFieldsEmpty = ' Pole count jest puste! ';
$strFieldsEnclosedBy = 'Pola zawarte w';
$strFieldsEscapedBy = 'Pola poprzedzone przez';
$strFieldsTerminatedBy = 'Pola oddzielane przez';
$strFixed = 'sta�y';
$strFlushTable = 'Prze�adowanie tabeli ("FLUSH")';
$strFormEmpty = 'Brakuj�ca warto�� w formularzu!';
$strFormat = 'Format';
$strFullText = 'Pe�ny tekst';
$strFunction = 'Funkcja';

$strGenBy = 'Wygenerowany przez';
$strGenTime = 'Czas wygenerowania';
$strGeneralRelationFeat = 'Og�lne funkcje relacyjne';
$strGo = 'Wykonanie';
$strGrants = 'Nadanie';
$strGzip = '".gz"';

$strHasBeenAltered = 'zosta�o zamienione.';
$strHasBeenCreated = 'zosta�o utworzone.';
$strHaveToShow = 'Musisz wybra� przynajmniej jedn� kolumn� do wy�wietlenia';
$strHome = 'Wej�cie';
$strHomepageOfficial = 'Oficjalna strona phpMyAdmina';
$strHomepageSourceforge = 'Pobranie wersji Sourceforge phpMyAdmina';
$strHost = 'Host';
$strHostEmpty = 'Brak nazwy hosta!';

$strIdxFulltext = 'Pe�ny tekst';
$strIfYouWish = 'Prosze poda� list� kolumn rozdzielon� przecinkami aby za�adowa� tylko wybrane kolumny.';
$strIgnore = 'Ignoruj';
$strInUse = 'w u�yciu';
$strIndex = 'Indeks';
$strIndexHasBeenDropped = 'Klucz %s zosta� usuni�ty';
$strIndexName = 'Nazwa indeksu :';
$strIndexType = 'Rodzaj indeksu :';
$strIndexes = 'Indeksy';
$strInsecureMySQL = 'Tw�j plik konfiguracyjny zawiera ustawienia (konto roota bez has�a), kt�re odpowiadaja domy�lnemu uprzywilejowanemu kontu MySQL. Tw�j serwer MySQL dzia�a z takim domy�lnym ustawieniem, jest otwarty dla w�amywaczy i naprawd� ta luka w bezpiecze�stwie powinna zosta� naprawiona.';
$strInsert = 'Dodanie';
$strInsertAsNewRow = 'Dodanie jako nowego rekordu';
$strInsertNewRow = 'Dodanie nowego rekordu';
$strInsertTextfiles = 'Dodanie pliku tekstowego do tabeli';
$strInsertedRows = 'Wprowadzone rekordy:';
$strInstructions = 'Instrukcje';
$strInvalidName = '"%s" jest s�owem zarezerwowanym, nie mo�na u�y� go jako nazwy bazy danych/tabeli/pola.';

$strKeepPass = 'Nie zmieniaj has�a';
$strKeyname = 'Nazwa klucza';
$strKill = 'Zabicie';

$strLength = 'D�ugo��';
$strLengthSet = 'D�ugo��/Warto�ci*';
$strLimitNumRows = 'rekord�w na stronie';
$strLineFeed = 'Kod wysuni�cia linii: \\n';
$strLines = 'Linie';
$strLinesTerminatedBy = 'Linie zako�czone przez';
$strLinkNotFound = 'Link nie znaleziony';
$strLinksTo = 'Linki do';
$strLocationTextfile = 'Lokalizacja pliku tekstowego';
$strLogPassword = 'Has�o:';
$strLogUsername = 'U�ytkownik:';$strRowsModeVertical=" vertical ";
$strLogin = 'Login';
$strLogout = 'Wylogowanie';

$strMissingBracket = 'Brakuj�cy nawias';
$strModifications = 'Modyfikacje zosta�y zapami�tane';
$strModify = 'Modifikacja';
$strModifyIndexTopic = 'Modyfikacja indeksu';
$strMoveTable = 'Przeniesienie tabeli do (bazadanych<b>.</b>tabela):';
$strMoveTableOK = 'Tabela %s zosta�a przeniosna do %s.';
$strMySQLCharset = 'System kodowania znak�w dla MySQL';
$strMySQLReloaded = 'MySQL prze�adowany.';
$strMySQLSaid = 'MySQL zwr�ci� komunikat: ';
$strMySQLServerProcess = 'MySQL %pma_s1% uruchomiony na %pma_s2% jako %pma_s3%';
$strMySQLShowProcess = 'Pokazuj procesy';
$strMySQLShowStatus = 'Informacje o stanie serwera MySQL';
$strMySQLShowVars = 'Zmienne systemowe serwera MySQL';

$strName = 'Nazwa';
$strNext = 'Nast�pne';
$strNo = 'Nie';
$strNoDatabases = 'Brak baz danych';
$strNoDescription = 'brak opisu';
$strNoDropDatabases = 'Polecenie "DROP DATABASE" jest zablokowane.';
$strNoExplain = 'Pomi� wyja�nienie SQL';
$strNoFrames='phpMyAdmin jest bardziej przyjazny w przegl�darkach <b>obs�uguj�cych ramki</b>';
$strNoIndex = 'Brak zdefiniowanego indeksu!';
$strNoIndexPartsDefined = 'Brak zdefiniowanych cz�ci indeksu!';
$strNoModification = 'Bez zmian';
$strNoPassword = 'Brak has�a';
$strNoPhp = 'bez kodu PHP';
$strNoPrivileges = 'Brak uprawnie�';
$strNoQuery = 'Brak zapytania SQL!';
$strNoRights = 'Brak wystarczajacych uprawnie�!';
$strNoTablesFound = 'Nie znaleziono tabeli w bazie danych.';
$strNoUsersFound = 'Nie znaleziono u�ytkownika(�w).';
$strNoValidateSQL = 'Pomi� sprawdzanie poprawno�ci SQL';
$strNone = 'Brak';
$strNotNumber = 'To nie jest liczba!';
$strNotOK = 'b��d';
$strNotSet = 'Tabela <b>%s</b> nie zosta�a znaleziona lub nie jest ustawiona w %s';
$strNotValidNumber = ' nie jest poprawnym numerem rekordu!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s trafie� wewn�trz tabeli <i>%s</i>';
$strNumSearchResultsTotal = '<b>W sumie:</b> <i>%s</i> trafie�';

$strOK = 'OK';
$strOftenQuotation = 'Znaki cudzys�owu. OPCJONALNIE oznacza, �e tylko pola char oraz varchar s� zawarte w "cudzys�owach".';
$strOperations = 'Operacje';
$strOptimizeTable = 'Optymalizacja tabeli';
$strOptionalControls = 'Opcjonalnie. Okre�lenie w jaki spos�b zapisa� lub odczyta� znaki specjalne.';
$strOptionally = 'OPCJONALNIE';
$strOptions = 'Opcje';
$strOr = 'Lub';
$strOverhead = 'Nadmiar';

$strPHPVersion = 'Wersja PHP';
$strPageNumber = 'Numer strony:';
$strPartialText = 'Skr�cony tekst';
$strPassword = 'Has�o';
$strPasswordEmpty = 'Puste has�o!';
$strPasswordNotSame = 'Has�a nie s� identyczne!';
$strPdfDbSchema = 'Schemet bazy danych "%s" - strona %s';
$strPdfInvalidPageNum = 'Niezdefiniowany numer strony PDF!';
$strPdfInvalidTblName = 'Tabela "%s" nie istnieje!';
$strPdfNoTables = 'Brak tabel';
$strPhp = 'Utw�rz kod PHP';
$strPmaDocumentation = 'Dokumentacja phpMyAdmina';
$strPmaUriError = 'Dyrektywa <tt>$cfg[\'PmaAbsoluteUri\']</tt> musi by� ustawiona w pliku konfiguracyjnym!';
$strPos1 = 'Pocz�tek';
$strPrevious = 'Poprzednie';
$strPrimary = 'Podstawowy';
$strPrimaryKey = 'Podstawowy klucz';
$strPrimaryKeyHasBeenDropped = 'Klucz podstawowy zosta� usuni�ty';
$strPrimaryKeyName = 'Nazw� podstawowego klucza musi by�... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>musi</b> by� nazw� <b>jedynie</b> klucza podstawowego!)';
$strPrintView = 'Widok do wydruku';
$strPrivileges = 'Uprawnienia';
$strProperties = 'W�asciwo�ci';
$strPutColNames = 'Umie�� nazwy p�l w pierwszym rekordzie';

$strQBE = 'Zapytanie przez przyk�ad';
$strQBEDel = 'Usu�';
$strQBEIns = 'Wstaw';
$strQueryOnDb = 'Zapytanie SQL dla bazy danych <b>%s</b>:';

$strReType = 'Ponownie';
$strRecords = 'Rekordy';
$strReferentialIntegrity = 'Sprawdzenie sp�jno�ci powi�za�:';
$strRelationNotWorking = 'Dodatkowe mo�liwo�ci pracy z po��czonymi tabelami zosta�y wy��czone. Aby dowiedzie� si�, dlaczego - kliknij %stutaj%s.';
$strRelationView = 'Widok relacyjny';
$strReloadFailed = 'Nie powiod�o si� prze�adowanie MySQL.';
$strReloadMySQL = 'Prze�adowanie MySQL';
$strRememberReload = 'Prosz� pami�ta� o prze�adowaniu serwera.';
$strRenameTable = 'Zmiana nazwy tabeli na';
$strRenameTableOK = 'Tabela %s ma zmienion� nazw� na %s';
$strRepairTable = 'Naprawienie tabeli';
$strReplace = 'Zamiana';
$strReplaceTable = 'Zamiana danych tabeli z plikiem';
$strReset = 'Reset';
$strRevoke = 'Cofni�cie';
$strRevokeGrant = 'Cofni�cie uprawnie�';
$strRevokeGrantMessage = 'Cofni�te zosta�y uprawnienia dla %s';
$strRevokeMessage = 'Cofni�te zosta�y uprawnienia dla %s';
$strRevokePriv = 'Cofni�cie uprawnie�';
$strRowLength = 'D�ugo�� rekordu';
$strRowSize = ' Rozmiar rekordu ';
$strRows = 'Rekord�w';
$strRowsFrom = 'rekord�w pocz�wszy od';
$strRowsModeHorizontal= 'poziomo';
$strRowsModeOptions= 'w trybie %s powt�rz nag��wki po %s kom�rkach';
$strRowsModeVertical= 'pionowo';
$strRowsStatistic = 'Statystyka rekord�w';
$strRunQuery = 'Wykonanie zapytania';
$strRunSQLQuery = 'Wykonanie zapytania/zapyta� SQL do bazy danych %s';
$strRunning = 'uruchomiony na %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'Istnieje szanse, �e w�a�nie znalaz�e� b��d w analizatorze sk�adni SQL. Zbadaj bli�ej swoje zapytanie i sprawd�, czy cudzys�owy s� poprawne i dobrze sparowane. Inn� mo�liw� przyczyn� niepowodzenia mo�e by� to, �e wysy�asz plik ze znakami binarnymi poza obszarem tekstu uj�tego w cudzys�owy. Mo�esz r�wnie� sprawdzi� swoje zapytanie SQL poprzez lini� polece� MySQL. W znalezieniu przyczyny problemu mo�e pom�� tak�e - je�li si� pojawi - poni�szy opis b��du serwera MySQL. Je�li nadam masz problemy lub analizator sk�adni zg�asza usterk� a linia polece� - nie, ogranicz sekwencj� zapyta� SQL do pojedynczego, kt�re powoduje problemy i zg�o�� b��d, do��czaj�c fragment danych zawarty w poni�szej sekcji CUT:';
$strSQLParserUserError = 'Wygl�da na to, �e w twoim zapytaniu SQL jest b��d. W znalezieniu przyczyny problemu mo�e pom�� tak�e - je�li si� pojawi - poni�szy opis b��du serwera MySQL.';
$strSQLQuery = 'zapytanie SQL';
$strSQLResult = 'Rezultat SQL';
$strSQPBugInvalidIdentifer = 'Nieprawid�owy identyfikator';
$strSQPBugUnclosedQuote = 'Niezamkni�ty cudzys��w';
$strSQPBugUnknownPunctuation = 'Nieznany znak przestankowy';
$strSave = 'Zachowanie';
$strScaleFactorSmall = 'Wsp�czynnik skali jest za ma�y, by schemat zmie�ci� si� na jednej stronie';
$strSearch = 'Szukaj';
$strSearchFormTitle = 'Szukaj w bazie danych';
$strSearchInTables = 'Wewn�trz tabel(i):';
$strSearchNeedle = 'Szukane s�owo (s�owa) lub warto�� (warto�ci)  (symbol wieloznaczny: "%"):';
$strSearchOption1 = 'przynajmniej jedno ze s��w';
$strSearchOption2 = 'wszystkie s�owa';
$strSearchOption3 = 'ca�a fraza';
$strSearchOption4 = 'jako wyra�enie regularne';
$strSearchResultsFor = 'Szukaj w rezultatach dla "<i>%s</i>" %s:';
$strSearchType = 'Znajd�:';
$strSelect = 'Wyb�r';
$strSelectADb = 'Prosz� wybra� baz� danych';
$strSelectAll = 'Zaznaczenie wszystkich';
$strSelectFields = 'Wyb�r p�l (co najmniej jedno):';
$strSelectNumRows = 'w zapytaniu';
$strSelectTables = 'Wybierz tabele';
$strSend = 'wys�anie';
$strServer = 'Serwer %s';
$strServerChoice = 'Wyb�r serwera';
$strServerVersion = 'Wersja serwera';
$strSetEnumVal = 'Je�eli pole jest typu "ENUM" lub "SET", warto�ci wprowadza si� w formacie: \'a\',\'b\',\'c\'...<br />Je�eli potrzeba wprowadzi� odwrotny uko�nik ("\") lub apostrof ("\'"), nale�y je poprzedzi� odwrotnym uko�nikiem (np.: \'\\\\xyz\' lub \'a\\\'b\').';
$strShow = 'Pokazanie';
$strShowAll = 'Pokazanie wszystkiego';
$strShowColor = 'Poka� kolor';
$strShowCols = 'Pokazanie kolumn';
$strShowGrid = 'Poka� siatk�';
$strShowPHPInfo = 'Informacje o PHP';
$strShowTableDimension = 'Poka� wymiary tabel';
$strShowTables = 'Pokazanie tabel';
$strShowThisQuery = ' Ponowne wywo�anie tego zapytania ';
$strShowingRecords = 'Pokazanie rekord�w ';
$strSingly = '(pojedynczo)';
$strSize = 'Rozmiar';
$strSort = 'Sortuj';
$strSpaceUsage = 'Wykorzystanie przestrzeni';
$strSplitWordsWithSpace = 'S�owa s� rozdzielane znakiem spacji (" ").';
$strStatement = 'Cecha';
$strStrucCSV = 'dane CSV';
$strStrucData = 'Struktura i dane';
$strStrucDrop = 'Dodanie \'drop table\'';
$strStrucExcelCSV = 'CSV dla MS Excel';
$strStrucOnly = 'Tylko struktura';
$strStructPropose = 'Propozycja struktury tabeli';
$strStructure = 'Struktura';
$strSubmit = 'Wys�anie';
$strSuccess = 'Zapytanie SQL zosta�o pomy�lnie wykonane';
$strSum = 'Suma';

$strTable = 'tabela ';
$strTableComments = 'Komentarze tabeli';
$strTableEmpty = 'Brak nazwy tabeli!';
$strTableHasBeenDropped = 'Tabela %s zosta�a usuni�ta';
$strTableHasBeenEmptied = 'Tabela %s zosta�a opr�niona';
$strTableHasBeenFlushed = 'Tabela %s zosta�a prze�adowana';
$strTableMaintenance = 'Zarz�dzanie tabel�';
$strTableStructure = 'Struktura tabeli dla ';
$strTableType = 'Typ tabeli';
$strTables = '%s tabel(a)';
$strTextAreaLength = ' To pole mo�e nie by� edytowalne,<br /> z powodu swojej d�ugo�ci ';
$strTheContent = 'Zawarto�� pliku zosta�a do��czona.';
$strTheContents = 'Zawarto�� pliku zastapi�a dane wybranej tabeli, kt�rych podstawowy lub unikalny klucz by� identyczny.';
$strTheTerminator = 'Znak rozdzielaj�cy pola.';
$strTotal = 'wszystkich';
$strType = 'Typ';

$strUncheckAll = 'Odznaczenie wszystkich';
$strUnique = 'Unikalny';
$strUnselectAll = 'Odznaczenie wszystkich';
$strUpdatePrivMessage = 'Uaktualni�e� uprawnienia dla %s.';
$strUpdateProfile = 'Uaktualnienie profilu:';
$strUpdateProfileMessage = 'Profil zosta� uaktualniony.';
$strUpdateQuery = 'Zmiana zapytania';
$strUsage = 'Wykorzystanie';
$strUseBackquotes = 'U�ycie cudzys�ow�w z nazwami tabel i p�l';
$strUseTables = 'U�ycie tabel';
$strUser = 'U�ytkownik';
$strUserEmpty = 'Brak nazwy u�ytkownika!';
$strUserName = 'Nazwa u�ytkownika';
$strUsers = 'U�ytkownicy';

$strValidateSQL = 'Sprawdzanie proprawno�ci SQL';
$strValidatorError = 'Analizator sk�adni SQL nie m�g� zosta� zainicjalizowany. Sprawd�, czy zainstalowane s� niezb�dne rozszerzenia php, tak jak zosta�o to opisane w %sdokumentacji%s.';
$strValue = 'Warto��';
$strViewDump = 'Zrzut tabeli';
$strViewDumpDB = 'Zrzut bazy danych';

$strWebServerUploadDirectory = 'katalog serwera www dla uploadu';
$strWebServerUploadDirectoryError = 'Katalog ustalony dla uploadu jest nieosi�galny';
$strWelcome = 'Witamy w %s';
$strWithChecked = 'Zaznaczone:';
$strWrongUser = 'B��dne pola u�ytkownik/has�o. Brak dost�pu.';

$strYes = 'Tak';

$strZip = '".zip"';
// To translate

$strImportDocSQL = 'Import docSQL Files';  //to translate
?>
