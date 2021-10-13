<?php 
$domandeRisposte = [
  [
    'domandaGoogle' => 'Come state implementando la recente decisione della Corte di giustizia dell Unione europea (CGUE) relativa al diritto all oblio?',
    'rispostaGoogle' => "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi. Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.
    Per presentare una richiesta di rimozione, compila questo modulo web. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.
    Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.
    Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.",
  ],
  [
    'domandaGoogle' => "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",
    'rispostaGoogle' => "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.

    Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.
    
    Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel Centro Google per la sicurezza online.
    
    Scopri quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo.",
  ],
  [
    'domandaGoogle' => "Perché il mio account è associato a un paese?",
    'rispostaGoogle' => "Il tuo account è associato a un paese (o territorio) nei Termini di servizio per poter stabilire due cose:

    La società consociata Google che offre i servizi, tratta le tue informazioni ed è responsabile del rispetto delle leggi sulla privacy vigenti. Generalmente Google offre i propri servizi per i consumatori tramite una delle due società seguenti:
    Google Ireland Limited, se gli utenti sono residenti nello Spazio economico europeo (paesi dell'Unione europea, oltre a Islanda, Liechtenstein e Norvegia) o in Svizzera.
    Google LLC, con sede negli Stati Uniti, per il resto del mondo.
    La versione dei termini che regola il nostro rapporto, che può variare in base alle leggi locali.
    Tieni presente che i servizi Google sono fondamentalmente gli stessi a prescindere dalla società consociata che li offre o dal paese a cui è associato il tuo account.",
  ],
  [
    'domandaGoogle' => "Stabilire il paese associato al tuo account",
    'rispostaGoogle' => "Quando crei un nuovo Account Google, lo associamo a un paese in base a dove è stato creato. Per quanto riguarda gli account creati almeno un anno fa, usiamo il paese da cui accedi solitamente ai servizi Google, in genere i servizi in cui hai trascorso più tempo nell'ultimo anno.

    I viaggi frequenti solitamente non influiscono sul paese associato al tuo account. Se ti trasferisci in un altro paese, potrebbe occorrere circa un anno per aggiornare l'associazione del paese.
    
    Se il paese associato al tuo account non corrisponde al tuo paese di residenza, il motivo potrebbe essere la differenza tra il paese in cui lavori e il paese in cui risiedi, l'installazione di una rete privata virtuale (VPN) per mascherare il tuo indirizzo IP oppure la residenza vicino a un confine territoriale. Contattaci se ritieni che il paese associato al tuo account sia sbagliato."
  ],

 

]

?>

<ol>
    <?php foreach($domandeRisposte as $domandaRisposta) { ?>
        <li> 
          <?php echo $domandaRisposta ['domandaGoogle']; ?> 
        </li>
        <br>
        <li>
          <?php echo $domandaRisposta ['rispostaGoogle']; ?> 
        </li>
        <br>
    <?php } ?>  
    

</ol>