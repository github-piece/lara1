<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--bootstrap styles -->
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
  <!-- fontawesome -->
  <link type="text/css" rel="stylesheet" href="css/all.min.css">
  <link type="text/css" rel="stylesheet" href="css/custom.css"> 
  <title>bitoptionstrade</title>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<header id="main-header">
<nav class="navbar navbar-expand-lg navbar-dark nav-dark fixed-top shadow">
        <div class="container">
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="{{route('frontend')}}" class="navbar-brand"><i id="logoClr" class="fab fa-bitcoin mx-2"></i>bitoptionstrade</a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav m-auto font-small">
                    <li class="nav-item">
                    <a href="#showcase" class="nav-link active">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="#partners" class="nav-link">PARTNERS</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a href="#market" class="nav-link">MARKET</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">CONTACT US</a>
                    </li>
                    <li class="nav-item">
                        <!-- <a href="{{route('login')}}" class="nav-link">LOGIN</a> -->
                        <!-- @if (Route::has('login')) -->
                                <!-- @auth
                                    <a href="{{ url('/home') }}">Home</a>
                                @else -->
                                    <a href="{{ route('login') }}" class="nav-link">LOGIN</a>

                                    <!-- @if (Route::has('register'))
                                        <a href="{{ route('register') }}">Register</a>
                                    @endif -->
                                <!-- @endauth -->
                        <!-- @endif -->
                    </li>
                </ul>
            </div>
        </div>
    </nav> 
</header>

<!-- Forgot password modal -->
<div class="modal fade" id="myModalForgotPassword" tabindex="-1" role="dialog" aria-labelledby="modalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <form action="{{route('frontend')}}" method="post">
                <div class="form-group">
                <label for="email"><i class="fas fa-lock mx-2"></i>Bitoption Email:</label>
                <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" required="true">
                <small id="emailHelp" class="form-text">We'll never share your email with anyone else.</small>
                <p class="text-muted">Please enter the email address you used to register the account, in order to change your password.
            </div>
            <a href="#" class="btn btn-primary btn-md">Restore</a>
            <a href="#" class="px-3 text-muted" data-toggle="modal" data-target="#myModal" data-dismiss="modal"><i class="fas fa-arrow-left mx-2"></i>Back</a>
            </div>
        </div>
    </div>
</div>



  <!-- terms of use modal -->
<div class="modal fade" id="modalLong" tabindex="-1" role="dialog" aria-labelledby="modalLongTitle" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="modalLong">
    Regualtion & Legal Information
</h5>
<button class="close" type="button" data-dismiss="modal" aria-label="close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<h3 class="display-4">Regulation</h3>
<p>Bitoptions Trade is a reliable broker, a member of the Financial Commission of A category. This is proof of the high quality of our services and guarantees each trader deposit insurance, comprehensive support and prompt resolution of all issues.</p>
<h3 class="display-4">Legal Information</h3>
<p><h1 class="lead"><b>1. General Provisions and Subject of the Agreement</b></h1>
1.1. This Service Agreement has been made between INLUSTRIS LTD., registered at First
Floor, First St Vincent Bank Ltd Building, James Street, Kingstown, St. Vincent and the
Grenadines, registration number 25161 IBC 2018 (hereinafter – Company), and the natural
person who filled in the registration form on the Company's website or in the trading
platform and accepted the terms of this Service Agreement and of the appendices hereto at
the moment of registration (hereinafter – Client). The Payment Agent(s) that are engaged
by the Company to carry out non-trading transactions under this Agreement is (are) also a
Party (Parties) to this Agreement. Details of The Payment Agent(s) are stated in the present
Agreement. The Company, Payment Agent(s) and Client are jointly referred to as "Parties".
1.2. The following documents are an integral part of this Service Agreement (annexes to
this Service Agreement):
a. Regulation on trading transactions;
b. Regulation on non-trading transactions and the KYC/AML policy;
c. Risk disclosure;
d. Other documents placed in the 'Legal Information' section on the Company's website,
including but not limited to the subdomains of the Company's website that are accessible
by the Client and / or in the trading terminal.
The Company may unilaterally alter the list, name, and content of annexes to this
Agreement. The Company may add new annexes to the Agreement or delete existing ones 
without making any amendments to this clause. The text of the Service Agreement and of
the annexes to it is referred to as the Agreement.
1.3. The Agreement is an invitation to make offers posted on the Company’s website that
must be treated as an offer to enter into this Agreement on the terms set forth in it. The
posted offer is not public. The Company at its sole discretion may refuse to enter into an
Agreement with anyone without explaining the reasons for refusal or, if registration took
place, to terminate contractual relations and to block access to the trading terminal. The
Client's registration on the Company's Website or on the trading terminal is considered as
full and unconditional acceptance of the terms of the Agreement. As soon as the Company
receives a payment to replenish the Client's trading account, each Client transaction using
the trading terminal or Dashboard becomes the subject of this Agreement.
1.4. The Client must carefully review the terms of the Agreement. By accepting the terms
of this Agreement, the Client agrees to the terms of all annexes to it listed above, including
the terms on subdomains of the Company's website that are accessible by the Client and
confirms that he/she is an adult who is a legally capable person and is not a resident of a
country where trading in options may be deemed illegal.
The Client also represents and warrants to the Company that:
1.4.1. All information provided during Client registration and during the performance of
Agreement, is true, accurate, reliable and complete in all respects, and the Client completed
the registration form him/herself;
1.4.2. The Client possesses legal personality to enter into this Agreement, to make inquiries
and give orders, and to exercise his rights and to fulfill obligations in accordance with the
terms of the Agreement;
1.4.3. The Client will carry out trading and non-trading transactions personally, on his own
behalf and at his own expense and will not use funds borrowed from other Company
Clients or from third parties to carry out transactions. The Client will be guided by the
principles of integrity, honesty, and rationality; the Client will not take actions coordinated
with other Company Clients aimed at damaging the Company; the Client will not use
technical features of the quote stream update on the trading terminal and will not use
software errors, defects, and vulnerabilities he discovers in the trading terminal to extract
income and will not distribute the information about vulnerabilities to the third parties. The
Client will not use unfair and dishonest methods or ways of making trades (transactions)
with the Company; the Client will not use insider or confidential information or any other
information, as a result of the use of which the Client might benefit when trading with the
Company and/or that might damage the Company;
1.4.4. The Client will adhere to legal norms, in particular, but not limited to, international
norms aimed at controlling illegal trade, financial fraud, and money laundering;
1.4.5. The Client will not use the trading terminal or website to collude in illegal financial
activities or any other illegal transaction;
1.4.6. The money listed by the Client on the Company's account has legal origin. The Client
legally owns the money and has the right to use and manage it. The Client's account will
not be replenished from third party payment instruments.
The Client will not replenish third party Client accounts or withdraw money from the
Client's account to third party payment instruments.
1.4.7. No actions of the Client pursuant to the Agreement will violate any law, regulation,
right, bylaws, or rules and regulations applicable to the Client or in the jurisdiction where
he/she resides or the provisions of any other agreement binding on the Client or involving
any assets of the Client
1.4.8. To carry out transactions, the Client will use account data from Trading Terminal
belonging to him and will not transfer account data to third parties and will not use account
data of the Company's clients for trading and (or) non-trading operations;
1.4.9. The Client is not a federal or municipal employee, an employee of a federal or
municipal institution, an employee of a federal or municipal organization, an organization
in whose capital the state has a prevailing interest; the Client is not a politically significant
person, a family member or a relative of a politically significant person; the Client is not a
person closely connected with a politically significant person; the Client is not a person
connected with the United States or with another country in which the Company does not
operate. The terms used in this paragraph are interpreted and applied by the Company at
its own discretion in accordance with the norms of international legislation and/or
legislation of a particular state, generally accepted terms and definitions, customary
business practices.
1.5. The subject of the Agreement is the definition of the general conditions under which
the Parties carry out transactions (trades), the content and procedure for which are set forth
in this Agreement. The Company unilaterally sets and may alter at its sole discretion
essential conditions for a transaction (trade), may limit the number of trades executed
simultaneously, and limit the number of trades that a Client may make within the time
period set by the Company, may set other limits for trades at its sole discretion and
unilaterally.
1.6. The Company may engage third parties to perform this Agreement. The company is
not responsible for services provided by such third parties.
<h1 class="lead"><b>2. Terms and Definitions</b></h1>
2.1. Asset – the underlying financial instrument of an option. An asset may be company
stock, a stock index, currency pair (the rate of an exchange of one currency into another
currency), goods quoted on a commodity exchange, commodity options, etc.
2.2. Client's Account Balance – the amount of money in the Client's account.
2.3. Option - a derivative financial instrument (trade), consisting of two transactions:
Making a trade and Closing a trade, as a result of the fulfillment of which the Client either
receives Income or loses the Trade amount. The Company does not, however, provide a 
Client with the ability to assume obligations greater than the Trade amount (the Company
does not provide leverage to the Client). The Company and the Client make a trade with
an Higher/Lower option - an option, the targeted level of which equals the asset price or
another price determined by the Client at the Company's suggestion when the trade is made,
payment on which is made if an upward price change was selected and the asset price was
greater than the targeted level when the option expired or if a downward price change was
selected and the asset price was less than the targeted level when the option expired. If the
asset price is the same as the targeted level when the option expires, the trade Amount is
returned to the Client.
2.4. Bonus – virtual cash credited by the Company to the Client's Account when the Client
meets the conditions established by the Company. When the Client executes trading
transactions, funds deposited by the Client must be used first and, only after those funds
are completely exhausted, does the Client have the right to use the Bonus for further trading
transactions. In general, the Client cannot withdraw the Bonus amount to the Client's
External Account. If the Client withdraws funds that were previously credited to his
External account, the Company has the right to debit the entire amount of previously
accrued Bonuses from the Client's Account. The Company has the right to set a minimum
trading amount and other terms under which the Bonus is not debited from the Client`s
Account and may be withdrawn to the Client's External account. The Company may
publish credit and debit rules, rules for using and converting Bonuses to real funds, and
rules for other transactions with Bonuses and Client funds that the Client accrued along
with Bonuses on its website.
The Company may, in addition to Bonuses, provide Clients with risk-free trades and use
other ways to reward and retain the Client. A risk-free trade is defined as a trade, at the
close of which the Client either receives Income (if the Client fulfils the conditions for
payment set in clause 2.3 of the Agreement) or receives a refund of the trade amount (if
the Client does not fulfil the conditions for payment set in clause 2.3 of the Agreement).
When the Client uses a risk-free trade that ended with the return of the Trade amount to
the Client because the targeted level and asset price coincided when an option expires, that
risk-free trade is deemed to be used by the Client.
2.5. Company Website – an internet site at the address (domain name) bitoptionstrade.com,
and other internet sites which the Company references in the Agreement or on the
Company Website.
2.6. Client External Account – the Client's current account at a lending institution, an
account (wallet) on an electronic payment system.
2.7. Option Expiration Time – the time when the condition for payout of income on the
option is checked.
2.8. Trading Hours – the time when trading in an asset may be done.
2.9. Funds Withdrawal – transfer of money from the Client’s Account to the Client’s
External Account.
2.10. Income – fixed remuneration credited to the Client's Account if the conditions of the
option are met. The Income amount is determined at the time that the trade is executed.
Income is credited to the Client’s account from the Company’s guaranteed (compensatory,
special) fund (reserve fund), which is formed in the manner determined by the Company
at its own expense.
2.11. Execution of a trade – a trading transaction in which the essential conditions of an
option trade are agreed by the Client and the Company. After the essential conditions are
agreed, the option trade is open.
2.12. Closing a trade - a trading transaction in which an open trade on an option is
liquidated at the option expiration time agreed by the Parties when the trade is made. Early
closing of a trade - closing a trade at the Client's initiative before it is closed at the option
expiry time. Early closing of a trade is possible only if the Company has the technical
capability to do so. The Company may unilaterally at its own discretion provide or refuse
to grant the Client the right to make an early closing of a trade. 2.13. Exceptional Situations
- abnormal market conditions and other exceptional conditions described in the Regulation
on Trading Transactions.
2.14. Payout ratio – the percentage that determines the Income amount set by the Company
depending on the option asset and other conditions of the option.
2.15. Asset Quote – the price for one unit of the Asset.
2.16. Log entry - an entry in the database made by the Company server that, with accuracy
to the millisecond or, in the case of absence of technical capability, with accuracy to the
second, documents all Client inquiries and orders and the result of their processing. Each
Client contact with the trading terminal and dashboard is documented in a log entry. These
server data are the primary source of information and are used by the parties as evidence
if disputes related to the performance of the Agreement arise. Information from a Company
server Log entry has unconditional priority over all other arguments during settlement of a
dispute, including over information from the Client's trading terminal Log file. The
Company reserves the right not to keep Log entries.
2.17. Price Direction – an essential condition of an option trade that determines the trade
payout. A price may change direction Higher or Lower.
2.18. Non-trading Transaction – any Client transaction to deposit funds on the Client's
Account or withdraw funds from the Client's Account.
2.19. Transactions – The Client's trading and non-trading transactions.
2.20. Open Trade – an option trade after the execution of the trade and before trade closure,
for which it is not determined yet whether a payout will be made.
2.21. Payment Agent – a third party used by the Company to transfer money to and/or from
the Client’s Account. The Company's Payment Agent is WALLFORT LIMITED, the
address is: KPMG Center, 1-st floor, 1 Agias Fylaxeos Street, 3025 Limassol, Cyprus
under registration number HE 364695. The Company is responsible for the actions of the 
Payment Agent as though they were its own actions. Claims/complaints/statements may
be submitted to the Company’s address.
2.22. Price Feed – a succession of prices displayed on the Trading Terminal.
2.23. Black Territory – the state of an open option trade if income on the trade can be paid
out on the basis of the current trade asset price.
2.24. Payment service provider - a company that provides funds transfer services.
2.25. Recurring payment – a periodically repeating transaction to replenish the Balance of
the Client's account without requiring the latter to reenter his or her credit card information.
2.26. Trade – an agreement between the Client and the Company under which the Client
pays the Trade Amount and the Company agrees to pay a fixed Income if the option
conditions agreed by the Parties are fulfilled.
2.27. Company Server – the Company's software used to process and store information
about client requests for trading and non-trading transactions, to provide to the Client realtime information about quotes, to account for trading and non-trading transactions, to
monitor the fulfillment of trade conditions and limit trading transactions, and to determine
the financial result of trades.
2.28. Withdrawal Method – one of the Funds Withdrawal methods offered to the Client
that is posted on the trading terminal and in the Dashboard.
2.29. The Trade Amount is the amount paid by the Client to the Company when the trade
is made. The Client`s profit on an option trade if the trade conditions are fulfilled is
determined by the procedure set forth in Section 2.10. of this Agreement.
2.30. Company's Account – the Company's settlement account at a financial institution, an
account (wallet) in an electronic payment system, and other accounts, including accounts
of Payment Agents.
2.31. Essential Conditions of a trading transaction (essential conditions of a trade) – the
conditions that govern the payout of income from a trade to the Client by the Company.
2.32. Client account (Trading account) - a special account in the Company's accounting
system in which funds transferred by the Client to make trades are posted; from which the
trade amount is debited when the trade is executed; and to which income is credited when
a trade is closed and the essential conditions of a trade are met. The Client has the right to
have only one Client account. In case of violation of this rule, the Company has the right
to refuse the Client in further service (rendering of services), to terminate this Agreement,
and to block further possibility to carry out transactions without explanation and without
payment of funds from the Client's account. It is not a violation of this clause of the
Agreement when the Company, if possible and unilaterally, grants the Client the right to
use several currencies within the Client's account, as well as the right to use the Client's
account in relations between the Company and the Client, which are governed
simultaneously by this Agreement and other agreements, concluded between the Company 
and the Client, under which the Company has the discretion to grant the Client the right to
use the Client's account to engage in trading transactions which are not prescribed in this
Agreement.
2.33. Trading transactions - procedures to make and close trades with options between the
Company and a Client. Trading transactions are carried out at the place of the Company’s
registration. No physical delivery of assets takes place during trading transactions. Trade
amounts for trading transactions are debited from the Client's account balance after a trade
is made. The Income on trading transactions are credited to the Client's account
immediately after a trade closes.
2.34. The Trading Terminal is software through which the Client can obtain real-time
information about quotes to carry out trading and non-trading transactions and receive
messages from the Company. Entry to the Trading Terminal is protected by a password
that the Client sets at registration on the Company's site. All orders and inquiries carried
out through the Trading Terminal are deemed to be carried out personally by the Client.
Clients from countries whose laws prohibit trading in options or other over-the-counter
derivatives and the employees, affiliates, agents and other representatives of the Company
and their relatives are prohibited from using the Trading Terminal. The part of the Trading
Terminal with which a Client can carry out nontrading transactions in this Agreement may
be called the Dashboard.
2.35. Red Territory - the state of an open option trade if, at the current asset price, income
cannot be paid out on that trade.
2.36. 1-Click service - makes it possible to replenish a Client's account balance from the
Client's bank (payment) cards without entering the bank (payment) card data of the bank
card holder again.
2.37. Targeted level - the level of asset prices with respect to which the trade result is
calculated.
2.38. Cookie file - a small data set including an anonymous unique identifier which is sent
to the web browser of the Client's computer or mobile telephone (hereinafter "device")
from the Company server (website) and is stored on the Client's device. The Client may
configure a web browser to block cookie access to the device. When a Client visits the
Company Website, the viewed pages and cookie files are downloaded onto the Client's
device. Cookie files stored on the device may be used for anonymous identification if the
Client revisits the Company's website and to determine the website pages that are the most
popular among our Clients. Cookie files stored on the hard drive of the Client's device
enable the company to create the most user-friendly and efficient website for Company
Clients, providing us an opportunity to identify our Clients' preferences.
2.39. Trading signals are information about the state of the market gathered by the
Company based on analytical conclusions that the Company is entitled to provide at its
discretion to some or all Clients with respect to certain market indicators. Trading signals
are not an offer and are not the Company's explicit recommendation to Clients to engage
in trading transactions or to make trades. The Company is not liable for the accuracy of
Trading Signals or for Client trading transactions and trades based on Trading Signals. The 
Client may, at his discretion, consider or ignore Trading signals when engaging in trading
transactions and trades.
2.40. Quote - the current Asset price displayed on the Trading Terminal. Terms used in this
Agreement and definitions absent in this Clause shall be interpreted in accordance with
usual and customary business practices applicable in regard to conclusion of agreements
with financial derivatives. </p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- showcase section -->
<section id="showcase">
  <div id="innerDisplay" class="container text-white">
    <div class="display-text">
      <div class="row">
        <div class="col-sm-8">
        <h1 class="display-4">8m people have chosen to trade the markets with Bitoptions Trade</h1>
        <p class="lead">Here is how to join them...</p>
        <!-- <a href="register.php" class="btn btn-primary btn-lg shadow">REGISTER</a> -->
        <a href="{{ route('register') }}" class="btn btn-primary btn-lg shadow">REGISTER</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- partner -->
<section id="partners" class="py-5">
<h2 class="display-3 text-center">Partners</h2>
  <div class="container text-white text-center">
  <div class="row m-5">
            <div class="col-sm-3"><img src="img/simplex-logo.png" class="simplex-icon">
                <h4 class="display-5">Simplex</h4>
                <p>Simplex is a fintech company that provides worldwide fraudless payment processing. Simplex's technology has a proven track record in precarious crptocurrency environments, and allows exchanges, brokers, wallets, merchants and marketplaces to conduct business online with complete fraud protection.</p>
                <a href="#" class="btn btn-primary btn-lg my-3 shadow">VISIT</a>
            </div>
            <div class="col-sm-3 shadow"><img src="img/honey-logo.svg" class="honey-icon">
                <h4 class="display-5">Honey</h4>
                <p>founded at an award-winning design agency in Brooklyn, Honey gives your employees a simple, central location to find all of the company information and updates they need.</p>
                <a href="#" class="btn btn-primary btn-lg my-3">VISIT</a>
            </div>
            <div class="col-sm-3"><img src="img/22249071.png" class="blckchair-icon">
                <h4 class="display-5">Blockchair</h4>
                <p>Blockchair is a blockchain search and analytics engine for Bitcoin and Bitcoin Cash or you can also say it's a blockchain explorer on steriods.You can filter blocks, transactions, and outputs by over 60 different criteria, as well as perform full-text search over the blockchains.</p>
                <a href="#" class="btn btn-primary btn-lg my-3 shadow">VISIT</a>
            </div>
            <div class="col-sm-3 shadow"><img src="img/wbf-logo.png" class="wbf-icon">
                <h4 class="display-5">World Blockchain Forum</h4>
                <p>WBF:World Blockchain Forum comes at a pivotal times as Blockchain becomes more than a technology, but a strategy to radically redesign the institutions and services we take for granted. The space is changing quickly and there's no better time than now to be involved.</p>
                <a href="#" class="btn btn-primary btn-lg my-3">VISIT</a>
            </div>
        </div>
  </div>
</section>

<!-- About Section -->
<section id="about" class="py-5">
    <div class="container text-white">
        <div class="row text-center">
            <div class="col-sm-12">
                <h1 class="display-3 py-2">About the Company</h1>
                <p class="lead text-center">Bitoptionstrade appeared on the options market in 2016. Since then we have continuously created the new and improved the old, so that your trading on the platform is seamless and lucrative. And that’s just the beginning.

                We don’t just give traders a chance to earn, but we also teach them how. Our team has world-class analysts. They develop original trading strategies and teach traders how to use them intelligently in open webinars, and they consult one-on-one with traders.

                Education is key thats what we believe and to become successful you must discover and do away with your ignorance.
                </p>
            </div>
            <div class="col-sm-6 text-secondary">
                <h1 class="display-5">Payouts</h1>
                <p class="lead">Traders’ funds are available for withdrawal any time. From one year to the next we’re increasing our payout speed and improving our trading education. As a result, more and more people are prospering with us.

                The number of payouts is increasing an average of 8% each month.</p>
                <span class="display-4">$ 16 721 131</span>
                <p class="lead">was paid out in the last month</p>
            </div>
            <div class="col-sm-6 text-secondary">
            <h1 class="display-5">Users per day</h1>
            <p class="lead">Our users are constantly growing in number. From now on every student or retiree, freelance artist or entrepreneur can be a trader. Trading is no longer the pursuit of “insiders”; it has become a fascinating and lucrative hobby. <span class="lead">247 256</span> users made trades on a live account in the last month</p>
            <span class="display-4">25 000+</span>
                <p class="lead">users are trading every day.</p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-6 text-secondary">
            <h1 class="display-5">Trades per month</h1>
            <p class="lead">There are more than more professionals among our traders, trading in the most diverse assets in long- and short-term trades, testing new strategies and applying the knowledge they gained in consultations and webinars.<span class="lead">$ 4.7</span> is the size of the average trade in the last month</p>
            <span class="display-4">37 990 740</span>
                <p class="lead">trades were closed in the last month</p>
            </div>
            <div class="col-sm-6 text-secondary">
            <h1 class="display-5">Trading volume</h1>
            <p class="lead">We’re literally ramping up every day, becoming a bigger and bigger company.</p>
            <span class="display-4">$ 171 236 104</span>
                <p class="lead">in turnover in the last month</p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-6 text-secondary">
                <h1 class="display-5">Guarantees</h1>
                <p class="lead">Bitoptions Trade is a category A broker of the international Financial Commission. Membership in the Financial Commission is an honor granted only to reliable, honest companies that have repeatedly demonstrated the high quality of their services. <p>up to <span class="display-4">€ 20 000</span></p>indemnification amount</p>
            </div>
            <div class="col-sm-6 text-secondary">
                <img src="img/diploma.jpg" class="img-thumbnail rounded mx-auto">
            </div>
        </div>
        </div>  
    </div>
</section>

<!-- market -->
<section id="market" class="text-white py-5">
    <div class="container">
        <h2 class="display-3 text-center">Market</h2>
        <div class="line"></div>
        <div class="row align-items-center">
            <!-- Bitcoin Cash (BTC) Price Chart Widget -->
            <div bw-cash="true" bw-noshadow="true" class="btcwdgt-chart col-6"></div>

            <!-- Bitcoin Core (BTC) Price Chart Widget -->
            <div class="btcwdgt-chart col-6"  bw-noshadow="true"></div>
        </div>
        <div class="row align-items-center">
            <!-- Active Forum Topics Widget -->
            <div class="btcwdgt-forum col-6"  bw-noshadow="true"></div>

            <!-- News Stories Widget -->
            <div class="btcwdgt-news col-6"  bw-noshadow="true"></div>
        </div>
        <div class="row align-items-center">
            <!-- News Ticker Widget -->
            <div class="btcwdgt-news-ticker col-6"  bw-noshadow="true"></div>

            <!-- Simple Price Widget -->
            <div class="btcwdgt-price col-6" bw-cur="usd"  bw-noshadow="true"></div>
        </div>
        <div class="row align-items-center">
            <!-- Bitcoin.com Mining Pool Hash Rate -->
            <div class="btcwdgt-pool col"  bw-noshadow="true"></div>
        </div>
    </div>
</section>

<!-- Contact Us -->
<section id="contact" class="py-5">
  <div class="container text-white">
      <h2 class="display-3 text-center">Contact Us</h2>
        <div class="line"></div>
        <p class="lead text-center">fill out the contact form</p>
        <div class="container">
        <form method="post" action="{{ route('register') }}" id="formStyle">   
            <div class="row">
                <div class="col">
                    <input type="email" name="email" placeholder="email" class="form-control" required="true">
                </div>
            </div>   
                <div class="row">
                <div class="col mt-4">
                    <textarea required="true" minlength="4" class="form-control" name="address" rows="5" placeholder="please enter your message here">
                    </textarea>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col text-center">
                    <a class="btn btn-primary btn-lg my-3" href="#">SEND</a>
                </div>
        </div>
      </div>
    </form>
  </div>
</section>

<!-- footer -->
<section id="footer" class="text-white py-3 footer-dark">
     <div class="container py-3" style="padding-top: 20px !important;">
        <h3 class="lead py-3 text-center">Live Cryptocurrency Price</h3>
         <!-- Cryptocurrency Price Widget --><script>!function(){var e=document.getElementsByTagName("script"),t=e[e.length-1],n=document.createElement("script");function r(){var e=crCryptocoinPriceWidget.init({base:"USD,EUR,CNY,GBP",items:"BTC,ETH,LTC,XMR,DASH",backgroundColor:"191f60",streaming:"1",rounded:"1",boxShadow:"1",border:"1"});t.parentNode.insertBefore(e,t)}n.src="https://co-in.io/widget/pricelist.js?items=BTC%2CETH%2CLTC%2CXMR%2CDASH",n.async=!0,n.readyState?n.onreadystatechange=function(){"loaded"!=n.readyState&&"complete"!=n.readyState||(n.onreadystatechange=null,r())}:n.onload=function(){r()},t.parentNode.insertBefore(n,null)}();</script><!-- /Cryptocurrency Price Widget --> 
     </div>
     <div class="nav-dark py-2" style="border-top: 2px solid #191f60">
         <footer class="footer text-center">
        <p>bitoptionstrade.com &copy | 2019 all rights reserved</p>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalLong">Terms and Conditions</button>
    </footer>
     </div>
</section>

<script>
  (function(b,i,t,C,O,I,N) {
    window.addEventListener('load',function() {
      if(b.getElementById(C))return;
      I=b.createElement(i),N=b.getElementsByTagName(i)[0];
      I.src=t;I.id=C;N.parentNode.insertBefore(I, N);
    },false)
  })(document,'script','https://widgets.bitcoin.com/widget.js','btcwdgt');
</script>

<script>
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

<!--smooth scroll-->
<script src="js/smooth-scroll.js"></script>
<!-- initialize smooth-scroll -->
<script>
    var scroll = new SmoothScroll('a[href*="#"]',{
        speed: 800,
        speedAsDuration: true
    });
</script>

<!-- all scripts linking -->
<script src="js/jquery-slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
</body>
</html>