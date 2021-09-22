<?php ob_start();?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
      <meta name="format-detection" content="telephone=no" />
      <meta property="og:site_name" content="Cashkar" />
      <meta property="og:image" content="https://cashkar.in/images/cashkar card image.png" />
      <link rel="shortcut icon" href="https://cashkar.in/images/Cashkar Website Logo.png" type="image/x-icon">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cashkar.in/css/header-css.css">
      <link rel="stylesheet" href="https://cashkar.in/css/home-page.css">
      <link href="https://cashkar.in/css/terms.css" rel="stylesheet" />
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
      <!-- animate css -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <!-- Popper JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <?php 
            if(isset($_GET['term']) && $_GET['term'] == 'cookie'){
                ?>
       <meta name="description" content="You agree to our cookie policy before selling your smartphone. Read this to know how and where we cookies to make customers experience better." />
      <title>Selling Your Old Mobile Phone And Tablet For Cash | Cashkar Cookie Policy</title>
         <?php
            }
            ?>
         <?php 
            if(isset($_GET['term']) && $_GET['term'] == 'indemnity'){
                ?>
              <meta name="description" content="Check Out our idemnity policy before selling your smartphone. You agree to this when you checkout." />
      <title>Selling Your Old Mobile Phone And Tablet For Cash | Cashkar Indemnity Policy</title>              
         <?php
            }
            ?>
         <?php 
            if(isset($_GET['term']) && $_GET['term'] == 'privacy'){
                ?>
              <meta name="description" content="Check Out our Privacy Policy before selling your smartphone at CashKar. We have listed all the details about customers privacy here." />
      <title>Selling Your Old Mobile Phone And Tablet For Cash | Cashkar Privacy And Policy</title>  
         <?php
            }
            ?>
         <?php 
            if(isset($_GET['term']) && $_GET['term'] == 'terms-and-condition'){
                ?>
               <meta name="description" content="CashKar Terms & Conditions: You agree to the below terms when selling your old smartphone at the CashKar portal. Please read them carefully." />
      <title>Cashkar | Terms And Conditions | Sell your old mobile and get cash instantly</title>
         <?php
            }
            ?>
         <?php 
            if(isset($_GET['term']) && $_GET['term'] == 'terms-of-use'){
                ?>
               <meta name="description" content="CashKar Terms Of Use: This will help you understand terms of use when selling your old smartphone at the CashKar portal. Please read them carefully." />
      <title>How To Sell Old Mobile And Get Cash Instantly | Cashkar Terms Of Use</title>
         <?php
            }
            
            ?>
      
      <!-- Bootstrap core CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="./css/simple-sidebar.css" rel="stylesheet" />
   </head>
   <body>
      <?php include "../content/menu.php"; ?>
      <div id="mySidenav" class="sidenav">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
         <a href="https://cashkar.in/terms/cookie" class="list-group-item list-group-item-action bg-light">Cookie Policy</a>
         <a href="https://cashkar.in/terms/indemnity" class="list-group-item list-group-item-action bg-light">Indemnity</a>
         <a href="https://cashkar.in/terms/privacy" class="list-group-item list-group-item-action bg-light">Privacy Policy</a>
         <a href="https://cashkar.in/terms/terms-and-condition" class="list-group-item list-group-item-action bg-light">Terms & Conditions</a>
         <a href="https://cashkar.in/terms/terms-of-use" class="list-group-item list-group-item-action bg-light">Terms Of Use</a>
      </div>
      <!-- Use any element to open the sidenav -->
      <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
      <div id="main">
         <?php 
            if(isset($_GET['term']) && $_GET['term'] == 'cookie'){
                ?>
         <span onclick="openNav()"> <i class="fa fa-arrow-right bg-success p-2 text-light"></i> </span>
         <div class="d-flex container mt-2 px-0" id="wrapper">
            <!-- Page Content -->
            <div id="page-content-wrapper px-1">
               <div class="container-fluid text-justify p-0">
                  <h1 class="mt-4">Cookie Policy</h1>
                  <p class="font-work sans">
                  <p> Cashkar India (Cashkar) uses cookies at https://www.Cashkar.in (the Website) to distinguish you from other website users. Cookies help us to present you with a great experience while you browse our Website and also allows us to enhance our Website. By using the Website, you agree to our use of cookies under this Cookie Notice. You should see a pop up on this effect on your initial visit to the Website. It may not usually appear on subsequent visits; you may remove your consent at any time by following the instructions below, including by modifying your browser settings so that cookies from this Website cannot be stored on your device. Please note: some of the website services will not perform so well if cookies are disabled. After your first visit to the Website, we may modify the cookies we use. This cookies policy will always let you know who is storing cookies, for what purpose and provide you with the means to turn off. You should review it frequently.</P>
                  <p><strong>What is a Cookie?</strong></p>
                  <p> A cookie is a small record of letters, numbers and special characters sent to and stored on your computer, smartphone, or another device for accessing the internet, whenever you connect a site. Cookies are helpful because they support a website to identify a user's device. We use cookies for several reasons, such as letting you navigate between pages efficiently, remembering your preferences, and generally improving the user experience. Session cookies are automatically removed when you close your browser, and persistent cookies remain on your device after the session is ended(for example, learning your user choices when you return to the site).</P>
                  <p><strong>How and Why the Website Uses Cookies</strong></p>
                  <p> The cookies we use are completely safe. Many of which are used purely to provide necessary safety features such as preserving your data. Overall, cookies help us provide you with better website sessions and service by monitoring which pages you find helpful and which you do not.</P>
                  <p>We use cookies to protect your privacy while you're using the Website. We also use cookies to give you the most satisfying experience when you visit this Website. Using cookies, we can make it more comfortable to do many things, such as maintaining your accounts, policies, or login credentials and selecting products and services. It can also help us tailor the content of this Website so we can present services or adverts that may be of your relevance. We use traffic log cookies to classify which pages are being used. This helps us analyse web page traffic and improve our Website and services to tailor it to user necessities. We only use this information for analytical purposes, and then the data is extracted from the system. Finally, we use analytics cookies, including third-party analytics cookies, to make the Website healthy for those who visit it frequently. They help us work out what users prefer and don't want and improve things for users.</p>
                  <p>We employ the use of cookies. By using Cashkar's Website, you consent to use cookies following Cashkar's privacy policy. Most of the modern day interactive web sites use cookies to enable us to retrieve user details for each visit.</p>
                  <p><strong>What Cookies Do We Use On Our Website?</strong></p>
                  <p>Necessary or "strictly necessary" cookies: as you might imagine, necessary cookies enable the actual functionality of the site to work, for instance ensuring that you can travel between Website pages securely. Such cookies classification cannot be disabled—for example, session cookies required to carry the Website, authentication cookies, and security cookies.</p>
                  <p> (PHPSESSID) (_ga)</p>
                  <p><strong>Social media cookies</strong></p>
                  <p>These cookies permit users to share our Website or materials on social media platforms. Just because these cookies are not in our control, you should refer to their respective privacy policies to understand how they function.</p>
                  <p><strong>IP Addresses and Web Logs Use</strong></p>
                  <p>We may likewise use your IP address and browser class to diagnose obstructions with our server, administer our Website, and enhance the service we offer to you. An IP address is a numeric-code that defines your computer on the network. We might also use your IP to collect broad demographic data. We may perform IP lookups to specify which domain you are coming from (e.g. facebook.com) to estimate our user's demographics more precisely.</p>
                  <p><strong>Personal Information Safety</strong></p>
                  <p>Cookies that we use, do not store personal data like your name, address, contact number, or email address in a readable format. The cookies we use cannot browse or search your computer, smartphone or web-enabled device to collect information about you or your family or record any material kept on your hard disk. We use a minimal number of cookies that store encrypted versions of data where you have requested us to, such as the Login OTP, to recognise you as you navigate through pages while active on the Website.</p>
                  <p><strong>How to Manage Cookies Through the Browser?</strong></p>
                  <p>You can disable, enable or delete cookies at the browser level at any point in time. To do this, kindly follow the directions provided by your browser (usually found in the "Help", "Tools" or "Edit" section). Disabling a cookie or its category does not eliminate the cookie from your browser, you will have to do this yourself. If you have disabled one or more cookies, we may still use data collected from cookies before your disabled preference is set. Though, we will discontinue using the disabled cookie to collect any further data. Please note that you may not be able to access any or all parts of our Website if you activate any browser settings that automatically eliminate all or any cookies, including essential cookies.</p>
                  <p><strong>Third-Party Websites</strong></p>
                  <p>When we add links to other websites, please be sure they will have their cookie and privacy policies that will direct the use of any data you submit. We advise you to read their policies and terms as we are not liable or accountable for their privacy practices.</p>
                  <p><strong>Changes To The Cookies Policy</strong></p>
                  <p>We may change or update this cookies policy, and we would want you to examine the policy frequently to stay up-to-date on how we are using cookies. This cookies policy updated on 10th Jan 2021.</p>
               </div>
            </div>
            <!-- /#page-content-wrapper -->
         </div>
         <?php
            }
            ?>
         <?php 
            if(isset($_GET['term']) && $_GET['term'] == 'indemnity'){
                ?>
                            <span onclick="openNav()"> <i class="fa fa-arrow-right bg-success p-2 text-light"></i> </span>

         <div class="d-flex container mt-2 px-0" id="wrapper">
             
            <!-- Page Content -->
            <div id="page-content-wrapper px-1">
               <div class="container-fluid text-justify p-0">
                  <h1 class="mt-4">Indemnity Terms</h1>
                  <p class="font-work sans">
                  <p><strong>Indemnity Terms & Conditions</strong></p>
                  <p> "Cashkar" is a unit of Cashkar India ("Cashkar/Company"), having its registered office at Chakala Road, Andheri-E, Mumbai 400099, India. </p>
                  <p>Engaged in buying old/pre-owned/used gadgets that include mobile smartphones, laptops, desktops, tablets, etc.</p>
                  <p>• I accept and agree with the quote provided by Cashkar in exchange for my mobile smartphones, laptops, desktops, tablets, etc.</p>
                  <p>• I confirm and agree that the personal details and ID Proof presented by me when selling the mobile device to Cashkar are true and correct in all aspects. I accept that the Privacy Policy of Cashkar governs my submission of personal information (please note: We Only Consider Aadhar Card, Passport, Government ID's having Address and  Photo of the seller)</p>
                  <p>• I confirm and agree that I am the legitimate owner of the mobile device. The said device is neither subject to any third party interests/liability nor is a property of theft. I agree that I can transfer the possession of the mobile device being its sole & lawful owner. If any legal action arises regarding the mobile device's ownership, Cashkar shall not be responsible for the same whatsoever in any way.</p>
                  <p>• I agree to hold harmless, indemnify and defend Cashkar, its employees, directors, officers, agents, assigns and their successors from and against any losses, damages, claims, liabilities, expenses costs including attorney's fees, caused by or resulting out of claims based upon my actions or inactions like (i) my violation of these Terms & Conditions, or (ii) my access to or use of Services,  (iii) the breach by me, or any third person using my account or on my behalf, including but not limited to any undertakings, representations or warranties, or concerning the non-fulfillment of any of its responsibilities under this arrangement or arising out of the Customer's breach of any regulations, applicable laws, including but not limited to the payment of statutory dues and taxes, violation of rights of privacy or publicity, Intellectual Property Rights, claim of libel, defamation, loss of Service by other subscribers and infringement of intellectual property or other requests. I agree not to settle in any manner without the prior written consent of Cashkar. Cashkar will use regular attempts to notify me of any such action, claim, or proceeding upon becoming aware of it. I agree that this defense and indemnification commitment will survive termination, expiration, or modification of these Terms and your use of the Platform and the Service.</p>
                  <p>• Terms of Use shall be construed, interpreted, and governed by and according to India's laws. I agree to resolve all claims in the courts located in Mumbai. I release Cashkar from any losses, claims, or damages concerning the data enclosed or stored therein or any media used in connection with the device.</p>
               </div>
            </div>
            <!-- /#page-content-wrapper -->
         </div>
         <?php
            }
            ?>
         <?php 
            if(isset($_GET['term']) && $_GET['term'] == 'privacy'){
                ?>
                <span onclick="openNav()"> <i class="fa fa-arrow-right bg-success p-2 text-light"></i> </span>
         <div class="d-flex container mt-2 px-0" id="wrapper">
            
            <!-- Page Content -->
            <div id="page-content-wrapper px-1">
               <div class="container-fluid text-justify p-0">
                  <h1 class="mt-4">Privacy Policy</h1>
                  <p class="font-work sans">
                  <p><strong>Who we are?</strong></p>
                  <p>Cashkar India, a company, having its registered office at Chakala Road, Andheri-E, Mumbai 400099, India. We take the security of your personal data very seriously and are dedicated to protecting and valuing the privacy of the users ("you" or your") of our Cashkar Website.</p>
                  <p><strong>What is this privacy notice?</strong></p>
                  <p>We may handle your personal data in connection with your use of the Platform. This privacy notice (together with our Terms and Conditions) set out, for the Platform, our collection and sharing practices, the uses to which personal data is put, the ways in which we protect it in accordance with the data protection laws and your privacy rights. Please read it carefully.
                     This Statement applies Personal Data processed by Cashkar when you:
                  <p>
                  <p>
                  <li>Visit this website (www.Cashkar.in) and/or any other CASHKAR website(s) which reference or link to this Statement (collectively, “Website”).</li>
                  </p>
                  <p>
                  <li>Visit CASHKAR's social websites. </li>
                  </p>
                  <p>
                  <li>Content you post on our social websites.</li>
                  </p>
                  <p>
                  <li>Communications from us, including phone calls, emails, or other electronic messages; or Data we collect.</li>
                  </p>
                  <p>
                  <li>
                     Name, Communication details (Email / Contact Details), Device Details, IMEI.</p>
                     <p>We collect some information straight from you via forms you complete or products or services you access, download, or otherwise obtain). Such information is generally limited to:</p>
                     <p>
                  <li>Your communications with CASHKAR personnel.</li>
                  </p>
                  <p>
                  <li>Information you give when you create your account, log-in credentials, and information about your Services' use and preferences.Other information is obtained indirectly from you via the use of our Services (for example, from examining your actions on the Website or providing you with account access).</li>
                  </p>
                  <p>
                  <li>Information you give when you subscribe to SMS services.</li>
                  </p>
                  <p>
                  <li>Information you give on the Website, such as online surveys, or feedback forms.</li>
                  </p>
                  <p><strong>Such information is generally limited to:</strong></p>
                  <p>Information regarding usage of the Website or Services via weblogs obtained automatically and passively applying various technologies, which generally will not individually identify you or others. Examples may include Device details, browser types, IP addresses, domains, and other anonymous statistical Data concerning aggregate's practice.
                     We may also collect your Personal Data via other sources such as vendors, publicly available sources or internet sites, commercially available marketing lists, service providers and data suppliers, registries, telephone directories, news outlets and related media, social network (such as LinkedIn). Such Personal Data obtained via these sources is limited to business contact information, IP addresses, such as names, contact information, job titles, LinkedIn, and other social media profiles.
                  </p>
                  <p><strong>Use of Personal Data</strong></p>
                  <p>CASHKAR uses your Personal Data when:</p>
                  <p>
                  <li>It is necessary to comply with appropriate laws or regulations.</li>
                  </p>
                  <p>
                  <li>We have your permission (where needed under applicable law) to use your data (where we rely on your permission, you have the right to withdraw permission by reaching us as set forth below).</li>
                  </p>
                  <p>
                  <li>We have a valid business interest to process such Personal Data.</li>
                  </p>
                  <p>
                  <li>It is needed to perform our obligations or practice our contractual rights.</li>
                  </p>
                  <p>Such legal reasons are classified for the following typical cases: Managing our Website and Providing Services:</p>
                  <p>Personal Data is prepared to deliver our contractual obligations, wherever relevant. In the circumstances wherever we have not entered into a deal with you, such processing is based on our legitimate interest to run and develop our company, manage and control the Website, provide and expand the Services, and to present requested content (for example, when you request a quote on our website).</p>
                  <p><strong>User Registration:</strong> Under our contractual obligations or legitimate interest to provide Services, when you register for an account with CASHKAR, we process your Personal Data as required to record and manage your account, give technical and consumer support and training, verify your identity, and send necessary account, and Services data.</p>
                  <p><strong>Support Requests:</strong> If you request that CASHKAR contacts you concerning any product queries or reach us by any medians open online.Your Personal Data is processed if essential for our legitimate interest in fulfilling your requests and communicating with you, or as required by contractual responsibilities.</p>
                  <p><strong>Functionality, Compliance & Security of Website and Services:</strong>We process your Personal Data to evaluate compliance with the appropriate usage for our legitimate interests in ensuring adherence to applicable terms. Personal Data is also processed by tracking the website and services' use to perform our contractual obligations, where appropriate, to provide a secure and useful experience. In cases where we have not entered into a contract with you, such processing is based on our legitimate interest in improving the security and safety of the services, Website, applications and systems, and in protecting our rights and the rights of others, whereby we reserve the right to examine, review and report any efforts to breach the security of the Website either Services, verify accounts and activity, and implement our terms and policies.</p>
                  <p><strong>Marketing Communications (Advertisement):</strong>Our rightful business interest is to improve our Website and Services, grow our company, and promote our offerings via direct marketing or providing personalized content ads. As such we will process your Individual Data by sending specific marketing information and additional communications only as necessary to consider such legitimate interests, or, if appropriate, to the extent you have granted your prior consent.</p>
                  <p><strong>Developing Website and Services (Developing Offerings):</strong>We process your Personal Data to examine usage, trends, and interactions with the Website and Services to the extent essential for our legitimate interest in improving the Website and Services, developing new offerings and providing individuals with tailor-made content to personalize your experience with our offerings, in certain instances, we will straight process your Data for such improvement by directly seeking your input. (for example, through feedback surveys).</p>
                  <p><strong>Payments:</strong>In the cases where you have presented your financial information to us, CASHKAR will process your Personal Data to validate such information and collect/process payments solely as required to complete a transaction and fulfil our contractual responsibilities. If Contractual Obligations, We may be asked to process Personal Data for legal and compliance purposes, we believe to be necessary or relevant under applicable law. Such processing may be needed to:</p>
                  <p>
                  <li>Protect our rights, safety, privacy, or property, or those of other persons.</li>
                  </p>
                  <p>
                  <li>Support our terms of service or other terms and conditions.</li>
                  </p>
                  <p>
                  <li>Respond to inquiries from courts, regulatory agencies, law enforcement agencies, and other public and government authorities.</li>
                  </p>
                  <p><strong>Tracking users use of the Platform:</strong> We use various tools, and collect different information, to assess how you use and interact with the Platform, including information about your visits, such as your IP address, details of your computer, device Identity (model/serial no), browser detail and location, connections, or some information that we may obtain through the use of cookies, network beacons/gifts, and Behavioural targeting or re-targeting. In most cases, this Data will be managed automatically. You can find more further information about our use of this type of technology in our Cookies Policy.</p>
                  <p><strong>Disclosure of your Information:</strong>CASHKAR may share Personal Data as follows: When necessary to provide the Services, conduct our business transactions, or when we believe that relevant law permits or demands disclosure, we may share Personal Data with, including entities which provide for hosting and payment processing, contracted service providers, system administration, data enrichment, analytics, marketing, or client support, to the extent required and following the legal bases set forth above. These service providers only receive Personal Data needed to fulfil the services they provide to CASHKAR. Under no conditions are such service providers allowed to use collected Personal Data for any objective other than to give CASHKAR the indicated services.</p>
                  <p><strong>Data Analytics:</strong> CASHKAR may use anonymous, aggregated utilization data for typical business operations (for example, Governance reporting). We may also share non-personal, anonymized, and statistical data with third parties to help CASHKAR with such analysis and developments.</p>
                  <p><strong>Mergers or Acquisitions:</strong> In case of a merger, consolidation, acquisition, corporate divestiture, change of control or dissolution wherever we sell all or a part of our company or assets, we will reveal the privacy policies of acquiring entities or will direct specific Personal Data and such information. We shall use reasonable efforts to notify you about any Personal Data change to an unaffiliated third party under applicable laws.</p>
                  <p><strong>Public Forums:</strong> If a part of the Website or CASHKAR branded social sites authorize public forum posting, the Personal Data you choose to share, post, upload, or make publicly open might be visible to others. You should never post or transmit any confidential or about other information unless you have permission to do so. Information given by you may be used to personalize your experience and to make content suggestions.</P>
                  <p><strong>Friends/Acquaintances:</strong> Please bear in mind that Cashkar cannot control what your friends or acquaintances do with the information you share with them. Once displayed on publicly-viewable web pages, data & information you share can be obtained and used by others. To request the exclusion of your personal information from our community forum or blog, please contact us at <strong>info@Cashkar.in.</strong></p>
                  <p>If we are unable to remove your personal information, In some cases, we will let you know as so why we may not be able to. We may also provide a feature enabling you to invite or refer a friend to join Cashkar or avail its services. If you give a friend's email address to us for this reason, we will use that email address only to send a one-time invitation to your friend. Your friend may reach us at <strong>info@Cashkar.in</strong> to remove their information from our database.</p>
                  <p><strong>Compliance with a legal obligation:</strong> We are authorized to process your personal data, where it is necessary for compliance with our legal necessities. For legitimate claims, we are allowed to process your personal data wherever necessary to pursue, establish or defend a legal claim.
                  <p><strong>Using your Data according to Data Protection Law:</strong> Data Protection Law claims that we meet specific requirements before using your personal data in the way defined in this privacy notice.We will rely on one of the below conditions to use your data, depending on the activities we are carrying out:</p>
                  <p><strong>Legitimate interests:</strong> It is in our legal interests to collect your personal data. It provides us with the knowledge that we need to deliver our services and make our Platform free. This requires us to give out a balancing analysis of our interests in using your personal data (for example, to grant access to the Platform and ensure no fraudulent activity is carried over our Platform), against the interests you have as a resident and the rights you have under Data Protection Law (for example, not to hold your personal data sold to third party marketing businesses without awareness). The result of this balancing test will decide if we may use your personal data in the processes defined in this privacy notice. We will always act reasonably and give proper consideration of your interests in taking on this balancing test.We are authorized to hold and process some of your personal data because it is needed to provide you access to and enable you to use the Platform and give you the services we have agreed to provide. We cannot offer you access to the Platform without this personal data.</p>
                  <p>We are authorized to hold and process some of your personal data because it is needed to provide you access to and enable you to use the Platform and give you the services we have agreed to provide. We cannot offer you access to the Platform without this personal data.</p>
                  <p><strong>Consent:</strong> We may provide you with promotional offers associated with our services where you have registered your permission for us to do so (to the extent that we are required to obtain consent under Data Protection Laws). We may contact you by email, phone, mail or electronic notifications (where you have agreed to those communication methods) to provide you information on your requested product or service. You may modify your marketing preferences at any time by reaching us as set out in section 14 below.</p>
                  <p><strong>Protection Laws: </strong>To manage your personal data for any other purpose is not covered in this privacy notice. We will let you know concerning any proposed new purposes before using your personal data in this way.</p>
                  <p><strong>Retention Period:</strong> Our retention periods for personal data is based on business necessities and legal demands. We hold personal data for as long as required for the processing purpose(s) for which the data was gathered, and any additional permissible, related purpose.
                  <p>We usually keep your data for as long as required to:</p>
                  <p>
                  <li>to prove that you were treated fairly.</li>
                  </p>
                  <p>
                  <li>to respond to any questions or complaints.</li>
                  </p>
                  <p>
                  <li>to support records according to rules that apply to us.</li>
                  </p>
                  <p>
                  <li>to demonstrate compliance with our regulatory responsibilities.</li>
                  </p>
                  <p>We will also hold your data for as long as required for regulatory, legal, or technical purposes (such as where data has to be held concerning historical support claims). We may also keep it for analysis or statistical purposes. We assure you that your privacy is protected and only use it for those purposes. To the extent your current or potential business has guided us to process your personal data on their part, we will hold data in accordance with their instructions.</p>
                  <p><strong>Your Employer:</strong> If You are an authorized user of the Services or have registered for CASHKAR Services using your corporate email address, we may share Personal Data with your business to the extent this is needed to provide you with access, to verify accounts and, investigate activities, or enforce our terms and policies.</p>
                  <p><strong>Location of Processing:</strong> Cashkar is located in and operates from Mumbai, India. We host our Services and process your Data in Nepal. Yet, it is possible that some of the service providers referenced above may process Personal Data outside your jurisdiction, and in nations that are not subject to an adequacy decision by the European. We assure that the data remains to be protected anywhere it is located consistently with the measures of protection required under applicable law, for example by entering into the back-to-back formal agreements and, if required, standard contractual conditions for the removal of data as approved by the European Commission (Art. 46 GDPR). Commission or your provincial legislature and/or regulator may not provide the same data protection level as your jurisdiction.</p>
                  <p><strong>Minors:</strong> CASHKAR's Services are only intended for business clients and customers and are not aimed at minors. Sale on the Platform is open only to somebody who can form lawfully binding agreements under the Indian Contract Act, 1872. Somebody who is "unqualified to contract" within the meaning of the Indian Contract Act, 1872, including un-discharged insolvents etc., cannot use the Platform. Suppose you are a minor, i.e. under the age of 18. In that case, you may use the Program or access service content on the Platform only under the supervision and permission/ approval of a parent or guardian. We do not intentionally collect Personal Data from minors under the age of 18. If you believe your child has provided us with Personal Data without your permission, please reach us as set out in section 14, and we will take steps to remove such Personal Data from our database & systems.</p>
                  <p><strong>Substantial Public Interest: </strong> We are authorized to process your data wherever it is required for reasons of valuable public interest, based on Data.</p>
                  <p><strong>Security of personal information:</strong> There is limited access to your personal data to those employees of ours, our affiliates, and third-party service providers who honestly need it to provide services. All information you present to us is stored on our or provider's secure servers and obtained and used subject to our safety policies and standards. We have given OTP based access to your account. Please keep this OTP confidential and not share it with anyone else, including anyone who works for us. We have achieved commercially reasonable electronic, physical, procedural, administrative, and technological safeguards in a way that complies with the safety requirements of data protection laws to preserve your data, located in the countries where we are based from any illegal access. However, as effective as our safety measures are, no protection system is firm. We cannot ensure these systems' security, nor can we guarantee that data provided by you or on your behalf cannot be hindered while being used over the web.</p>
                  <p><strong>Ways we may contact you.</strong></p>
                  <p><strong>Marketing communications and newsletters:</strong> If we have your consent, we may send you materials we believe may interest you, such as new offers and updates on Cashkar. Depending on your marketing choices, by email or SMS. You can choose whether or not to receive these emails at any point time, and you may control your acceptance of the same by unsubscribing using the equivalent link at the end of some emails, or you can reach us at <strong>info@Cashkar.in</strong></p>
                  <p><strong>Customer Feedback:</strong> We may contact you sometimes for your valuable feedback related to service and your transaction/experience and with Cashkar.</p>
                  <p><strong>Responding to your inquiries or complaints:</strong> If you have raised an inquiry or a grievance with us, we may reach you to resolve your complaint or clarify your query.</p>
                  <p><strong>Rights and Responsibilities with respect to your Data:</strong> You have several rights under data protection laws regarding the way we process your personal data. These are set out below. Using the articles in section 14 below, you may contact us to use any of these rights. We will answer to any request received from you within 45 days from requested date</p>
                  <p>Classification OF RIGHTS
                  <p>
                  <li>A right to access personal data maintained by us about you.</li>
                  </p>
                  <p>
                  <li>A right to require us to revise any incorrect personal data held by us about you.</li>
                  </p>
                  <p>
                  <li>A right to request us to delete personal data managed by us about you. This right will only apply wherever (for example): we no longer require to use your personal data to fulfil the purpose we collected it for; or where you revoke your permission (only if we are handling your personal data based on your consent); or where you oppose to the way we manage your personal data (in line with Right 6 below).</li>
                  </p>
                  <p>
                  <li>The right to collect personal data, which you have granted to us, in a structured, generally used, and computer-readable format. You also have the right to demand us to transfer this personal data to a different company, at your demand.</li>
                  </p>
                  <p>
                  <li>A right to limit our processing of personal data managed by us about you. This right will only apply wherever (for example): you discuss the accuracy of the individual data collected by us or wherever you would have the right to ask us to delete the personal data, but it's better our processing is limited instead, or where we no longer need to use the personal data to fulfil the purpose we collected it for, but you need the data for dealing with legal claims.</li>
                  </p>
                  <p>
                  <li>A right to oppose our processing of your personal data (including sending promotional messages to you).</li>
                  </p>
                  <p>
                  <li>A right to remove your permission, wherever we rely on it to use your personal data (for example, sending you promotional messages about our services). If you revoke your consent, we may not provide some products or services to you.</li>
                  </p>
                  <p>Above rights are subject to certain exceptions to safeguard the common public interest (e.g., the prevention or detection of criminal activities) and our interests (e.g., preserving legal privilege).</p>
                  <p><strong>Information Update:</strong> Keeping your information updated and accurate is very important. Incorrect or incomplete information could weaken our ability to perform relevant services to you. We wish to use reasonable efforts to confirm that your Personal Data is correct. To help us with this, you should inform us of any corrections to your information by keeping your profile up-to-date on the Platform (website/app) or reaching us as set out in section 14. Purposely giving incorrect or misleading information or using an email address or personal data of another person's or entity to obtain any products or services through the Platform wrongly, shall lead to access termination to the Platform and may result in lawful actions.</p>
                  <p><strong>Service communications:</strong> We interact with you concerning the Transaction that you have initiated with us.</p>
                  <p><strong>Modifications to Privacy Notice:</strong> We may change the Platform's content and how we use cookies. Consequently, this privacy declaration and our cookies notice and any additional document to which they apply are subject to revision at any point of time. If we perform material updates to this privacy notice, we will update the date it was last changed and will indicate in the document. We make any changes to this privacy notice immediately when we post the Platform's revised privacy notice. We recommend that you examine this privacy notice frequently for changes. This privacy notice was last updated on 10th Jan 2021.
                     Questions Concerning this Statement and Your Information If you have any questions or comments concerning this Statement or your information, please contact us at <strong>info@Cashkar.in</strong>
                  </p>
                  <p><strong>How to complain:</strong> Suppose you are unhappy with using your personal data or are not satisfied with managing any request by you concerning your rights. You can tell us on the above contact details. You can also complain to the appropriate supervisory authority.</p>
               </div>
            </div>
            <!-- /#page-content-wrapper -->
         </div>
         <?php
            }
            ?>
         <?php 
            if(isset($_GET['term']) && $_GET['term'] == 'terms-and-condition'){
                ?>
                <span onclick="openNav()"> <i class="fa fa-arrow-right bg-success p-2 text-light"></i> </span>
         <div class="d-flex container mt-2 px-0" id="wrapper">
            <!-- Page Content -->
            <div id="page-content-wrapper px-1">
               <div class="container-fluid text-center p-0">
                  <h1 class="mt-4">Terms & Conditions</h1>
                  <p class="font-work sans">
                  <p><strong>Terms and Conditions for Cashkar & It's Services:</strong></p>
                  <p>By using Cashkar, you agree to these Terms & Conditions (defined below). Please read them carefully. Cashkar India., formerly known as Cashkar, doing business as “Cashkar.”</p>
                  <p>“Cashkar India” owns and operates the website, www.Cashkar.in. The mobile touch versions, App on Play store and Apple App store and/or any site(s) we have now or in the future that reference these Terms & Conditions (collectively, “Cashkar”), provides a marketplace and platform for consumers and organizations to sell their used, old and other articles, and conduct varied transactions and activities, with third-party companies and other entities and persons (collectively, “Third Parties”). The Cashkar marketplace, platform, and related functionality, whether provided through the Site or through other means, are collectively referred to as the services (the “Services”).</p>
                  <p>If you do not accept any part of these Terms & Conditions, you must not use the Site (website) or Services. Continuing use of the Site or Services will constitute your acceptance of these Terms & Conditions, as they may be altered by us from time to time, with or without notice to you. Visit this page often for updates to the Cashkar Terms & Conditions.</p>
                  <p>
                     <strong>
                  <li>Cashkar is a marketplace venue.</li></strong></p>
                  <p>Cashkar is a platform to allow users, subject to compliance with Cashkar’s policies, to sell certain goods. Cashkar may not be directly involved in the transaction between a user(s) and third-party professional(s). We ensure no control by reasons/deductions whatsoever in any aspect of your transactions with Third Parties. The Third Parties are responsible to you for all aspects of your transactions with them.</p>
                  <p>
                     <strong>
                  <li>Permitted Use and Compliance with Laws.</li></strong></p>
                  <p>Cashkar authorizes you to access, view and use the Site content and software (collectively, the “Cashkar India Property”) only to the extent required to use the Services. You may not eliminate any trademark, copyright, or other proprietary notices that have been placed on the Cashkar & it's Properties. You may not engage in regular retrieval of data or other content from the Cashkar Property. Except as expressly authorized by these Terms & Conditions, any alteration, reproduction, redistribution, transmitting, republication, uploading, modification, posting, distributing or otherwise exploiting in any way the Cashkar Property, or any portion of the Cashkar Property, is strictly prohibited without the prior written permission of Cashkar India.</p>
                  <p>You agree to comply with all regulations, applicable laws and ordinances relating to the Site and Services, the Cashkar Property or your use of them (Use of Site and Services), you will not engage in any conduct that limits or inhibits any other person from using or trying the Services.</p>
                  <p>
                     <strong>
                  <li>Cashkar Services, Third Party Services and its Sites</li></strong></p>
                  <p>The information and materials presented in the Site and through the Services are meant for general reference only. They may not describe all of the terms, conditions, and limitations applicable to Cashkar’s Services. Cashkar offers information from Third Parties through the Cashkar Site and Services, including prices provided for your items, item specifications, specific Third Party Terms of Service, and other information (“Third Party Information”). Cashkar cannot manage and is not accountable for the accuracy of any Third Party Information.</p>
                  <p>You manage your sales and other transactions directly with the Third Parties and, unless specifically and clearly indicated, not with Cashkar. Third Parties are solely accountable to you for all aspects of your transactions and dealings with them. Cashkar cannot handle any part of your sales and deals with Third Parties.</p>
                  <p>At times, Cashkar sites may have links to Third Party hosted sites, other articles (the “Extra Sites”), or Additional such websites may have links to the Cashkar Site. These links are given for convenience and informational purposes alone, not as referrals or endorsements by Cashkar of the Additional Sites. Their respective organizations maintain the Additional Sites, and those organizations are solely responsible for their website's content. Cashkar does not verify or make any warranty or representation about the content, accuracy, intellectual property compliance, opinions expressed, securities, products or services, or Additional Sites links. It would help if you examined the privacy policies also Terms & Conditions agreements of all Additional Sites.</p>
                  <p>
                     <strong>
                  <li>Trademarks and Copyright.</li></strong></p>
                  <p>Except as otherwise shown, all materials in the Site, including, but not limited to software, photos, text, graphics, video, sound, music, the Cashkar Logo, Cashkar Logo and other Cashkar trademarks and service marks and contents of the Site, the property of Cashkar India and/or its affiliates or licensors, including the Third Parties. They are protected by trademark and copyright laws, all rights reserved (global/Indian). Violation of any of these restrictions may result in a copyright or trademark other intellectual property right violation that may subject you to civil and/or wrongful punishments.</p>
                  <p>Other marks on the Site that are not owned by Cashkar may be below the trademark owner's license. Such right is for the exclusive benefit and use of Cashkar except stated or their respective owners' property. You may not use the trademarks, trademark name, logos, or brands, or trademarks or brands of others on the Site without Cashkar India’s express permission.</p>
                  <p>
                     <strong>
                  <li>Passwords and Privacy</li></strong></p>
                  <p>Cashkar values and protects the privacy of your information. Please review the Cashkar privacy policy, as it contains important information relating to your use of the Site and Services. Some Site portions are protected and require a user identification code (“User ID”) and password for access. Unauthorized access or use of such parts of the Site is prohibited. You agree that you will notify Cashkar immediately if you believe that a third party has gained your User Credentials, or if you assume that any unauthorized access or use may occur or has occurred. For your protection, if Cashkar believes that any unauthorized access may occur or has occurred, Cashkar may stop access without prior notice to you. You also agree that Cashkar is permitted to act upon any instructions received such instructions as authorized by you.</p>
                  <p>
                     <strong>
                  <li>Membership.</li></strong></p>
                  <p><strong>Basic Membership and Registration Terms:</strong></p>
                  <p>a. Members are visitors to the Site and those using the Services that choose to register with Cashkar (“Members”). Once registered, a Member account is created (“Account”). If to register as a Member, you signify and guarantee to us that:</p>
                  <p>(i) you are of authorized age to produce a binding agreement</p>
                  <p>(ii) you will present us with valid, current, contact information and keep your data up to date.</p>
                  <p>(iii) your registration, including your usage of the Services, are not prohibited by law. We maintain the right to cancel your membership or access the website & Services if you breach any Terms & Conditions or other applicable Cashkar policies.</p>
                  <p>b. Age: To create an Account use services of this Website, you must be at least 16 years old or the age.</p>
                  <p>c. Account and Password: You will create a password and a user id for your Account. You are responsible for keeping your password secure, and you are responsible for all actions taken using your password.</p>
                  <p>
                     <strong>
                  <li>Inactive Accounts</li></strong></p>
                  <p>User Account may be set to inactive if there is no activity on that Account for 300 days.</p>
                  <p>
                     <strong>
                  <li>Indemnity.</li></strong></p>
                  <p>Customer agrees to indemnify and hold Cashkar, our officers, directors, employees, agents and representatives also affiliates, suppliers, licensors and partners, and each of them harmless, including costs, from any liabilities and legal fees, claim or ask demanded by any third party due to or arising out of:</p>
                  <p>Under no circumstances will you be entitled to recover from us any incidental, consequential, indirect, punitive or special damages (including damages for loss of business, loss of profits or loss of use), whether based on contract, tort (including negligence), or otherwise arising from or relating to the services or Cashkar property, even if Cashkar has been informed or should have known of the possibility of such damages. in any event, Cashkar’s maximum aggregate liability for any and all damages arising from the services or the Cashkar property shall be a refund of the amount paid by you to us, if any.</p>
                  <p>1. Your access to or use of Services.</p>
                  <p>Your violation of these Terms & Conditions.</p>
                  <p>Some infringement by you, or any third party handling your Account, of any intellectual property or other rights of any person or entity.</p>
                  <p>Cashkar reserves the right, at your expense, to assume the particular defence and control of any material or matter for which you are required to indemnify us, and you agree to cooperate with our defence of those claims. You agree to not settle any claim without the prior written permission of Cashkar. We will use reasonable efforts to inform you of any claim, action or proceeding upon being notified.</p>
                  <p>
                     <strong>
                  <li>Applicable Law, Jurisdiction, Compliance.</li></strong></p>
                  <p>You and Cashkar agree that all matters arising from or relating to the Site and/or the Service's use and development will be governed by the Republic of India's substantive laws & rules, concerning its conflicts of laws principles. You acknowledge that you may resolve all claims you may have arising from or relating to the development, use or other exploitation of the Site and/or the Services in the courts located in New Delhi. You consent to such courts' personal jurisdiction over you, stipulate the convenience and fairness of proceeding in such courts, and promise not to allege any objection to such courts.</p>
                  <p>
                     <strong>
                  <li>Miscellaneous Provisions</li></strong></p>
                  <p>No delay or breach by us in exercising any of our rights occurring upon any noncompliance or default by you concerning any of these Terms & Conditions will impair any such right or be construed as a waiver thereof. You should perform to waiver by us for any of the conditions, covenants, or agreements. It will not be interpreted to be a waiver of any subsequent violation thereof or any other agreement, condition or agreement thereof included. As applied in these Terms & Conditions, “including” means “comprising but not limited to.” Assume any provision of these Terms & Conditions is determined by a court of competent jurisdiction to be invalid, wrong or unenforceable. In that case, these Terms & Conditions will remain in full power and effect and will be changed to be valid and enforceable while reflecting the parties' intent to the greatest extent allowed by law. Except as otherwise expressly granted herein, these Terms & conditions set out the entire agreement between you and Cashkar regarding its subject matter and supersedes all prior promises, representations or understandings, whether written, printed or oral, regarding such concern. You acknowledge that these Terms & Conditions and electronic text produces writing and your approval to the terms and conditions hereof creates a “signing” for all purposes.</p>
                  <p>
                     <strong>
                  <li>Information Collection, Use, and Sharing</li></strong></p>
                  <p>By submitting any Cashkar contact form, you understand that you may be contacted by a representative from Cashkar or a representative from the partner chosen. You may be reached via telephone, text, email, or prerecorded message regarding Cashkar programs, events, offers, announcements, and offers from Cashkar’s third-party marketing partners. If you respond to any such request, your information will be subject to that third party’s terms and conditions. By giving us your phone number, you grant Cashkar permission to use text messages, prerecorded voice, and/or automatic telephone dialling systems to contact you and/or deliver Cashkar related information, offers or announcements.</p>
                  <p>You also agree that Cashkar may attempt to reach you via any phone number you provide, even if it is a mobile phone number, resulting in charges to you. You can opt-out from Cashkar email /messages at any time.</p>
                  <p>
                     <strong>
                  <li>Grievance officer</li></strong></p>
                  <p>Under Information Technology Act 2000 and rules made thereunder, the name and contact details of the Grievance Officer are provided below:</p>
                  <p>Contact</p>
                  <p><strong>Mr Prashant Thever</strong></p>
                  <p><strong>Email: thever.p@Cashkar.in</strong></p>
               </div>
            </div>
            <!-- /#page-content-wrapper -->
         </div>
         <?php
            }
            ?>
         <?php 
            if(isset($_GET['term']) && $_GET['term'] == 'terms-of-use'){
                ?>
                <span onclick="openNav()"> <i class="fa fa-arrow-right bg-success p-2 text-light"></i> </span>
         <div class="d-flex container mt-2 px-0" id="wrapper">
            <!-- Page Content -->
            <div id="page-content-wrapper px-1">
               <div class="container-fluid text-justify p-0">
                  <h1 class="mt-4">Terms Of Use</h1>
                  <p class="font-work sans">
                  <p>Read the terms of use thoroughly for using our website ("Cashkar"). These "terms of use" govern your access and how you use the website. Cashkar is open for your use only because you agree to the terms of use set forth below. If you do not conform to all the terms of use, please do not access or use our website.</p>
                  <p>You and the entity agree to represent ("you" or "your") signify your agreement to be bound by the terms of use if you are using Cashkar.</p>
                  <p>This is a legal contract between Cashkar India, "you" the "seller of the products/good", and + third-party buyers ("buyer") which provide services for selling, recycling and/or donating of used consumer products (the "buyer services").</p>
                  <p>Cashkar is a platform for sellers and it allows sellers who comply with our policies to sell certain goods through our site. You sell and conduct your other transactions directly with third parties and unless particularly, specifically, and clearly indicated, not with Cashkar. Due to which, Cashkar can't control any aspect of your transaction with the third party. The third parties are solely responsible for all aspects of your sales and marketing with them. Consequently, Cashkar will have no liabilities towards the sellers or buyers in this regard. In the document below "we", "our", "us" is used for Cashkar and Cashkar's third party buyer.</li></p>
                  <p>
                  <li>You certify and guarantee that you are a legal owner of the device you wish to sell.</li>
                  </p>
                  <p>
                  <li>All initial quotes given are pending our evaluation of your gadget or device and thus, no binding offer is made until we have the chance to evaluate and inspect the device. Cashikar reserves the right to refuse to offer to purchase any item that you submit for selling for any reason we deem, in our sole discretion. Cashkar reserves the right to modify and update our quote anytime as per market fluctuation and situation.</li>
                  </p>
                  <p>
                  <li>Upon inspection and evaluation of your gadget or device, we agree to pay you the quoted amount given to you via our website, app, or affiliates. You are contractually and legally bound to sell the gadget or device for the price quoted via the website via Cashkar on payment.</li>
                  </p>
                  <p>
                  <li>Cashkar reserves the right to change our offer if the device is different from the specifications mentioned by you on our website. Should you be given a quote by Cashkar, and upon device inspection and evaluation your gadget is </li>
                  </p>
                  <p>a. A different model or brand than originally specified or quoted by you,</p>
                  <p>b. has any missing parts,</p>
                  <p>c. in another condition than set, we, in instances mentioned heretofore and beyond, reserve the right to change our offer.</p>
                  <p>
                  <li> Following documents need to be attached with all gadgets sold compulsorily:</li>
                  </p>
                  <p>a. self-attested ID-proof (government approved) of the owner of the old device;</p>
                  <p>b. If required, self-attested indemnity bond that has been provided by us</p>
                  <p>
                  <li>You understand that Goods distributed as gifts from NGO, state-sponsored or funded distribution programs are not accepted on Cashkar.</li>
                  </p>
                  <p>
                  <li>You are responsible to clean or delete data on your device being sold via Cashkar. You confirm that despite erasing the data manually/electronically, if any information is still accessible for any technical reason, Cashkar or the Third-party buyer shall not be responsible for the same and will not approach Cashkar for any retrieval of the data. You confirm that you will erase all the data on your device before handing it over.</li>
                  </p>
                  <p>
                  <li>You understand that the device sold by you via Cashkar won't be returned once sold, in no scenario.</li>
                  </p>
                  <p>
                  <li> You need to own right, title, and legitimate interest in the gadget or other products you sell us. Your sale and/or a shipment of any such article must not violate any jurisdiction regulation or law. The product you sell must be free of all standard conditions that would affect the article's value, restrict your legal right to transfer ownership of the item (including the object itself or hardware on or inside the item or software present on the product). You may not unlawfully share or hinder any trademark intellectual property, patent, copyright, software, license or other legal right or restriction via your selling or shipping of the picked-up item. It would be best if you refrained from violating any export laws or regulations. The item you sell (including all related hardware, software and add on materials) should not be stolen, counterfeited or contain harmful or offensive content of any nature. You agree to indemnify and hold Cashkar, our affiliates, licensors, suppliers, officers, directors, employees, agents and partners and their representatives harmless, including costs, liabilities and legal expenses, from any demand or claim made by any third person due to or arising out of</li>
                  </p>
                  <p>(i) your access to or use of Services,</p>
                  <p>(ii) your violation of these Terms & Conditions</p>
                  <p>
                  <li>We reserve the right to alter this Agreement at any point of time without giving you prior notice. Your use of our website/app, any of our tools and services, following any such modification confirms your agreement to follow and be bound by the Agreement as modified. Terms and conditions modifying the Agreement are effective immediately upon publication</li>
                  </p>
                  <p><strong>PLEASE NOTE:</strong></p>
                  <p>Some jurisdictions do not allow restrictions on an implied warranty, so limitations and exclusions in this section may not apply to you. Your lawful rights that cannot be waived, if any, are not affected by these terms. You agree and acknowledge that the conditions and exclusions of liability and warranty provided in these terms of use are fair and right.</p>
               </div>
            </div>
            <!-- /#page-content-wrapper -->
         </div>
         <?php
            }
            if($_GET['term'] != 'warranty-policy' && $_GET['term'] != 'cookie' && $_GET['term'] != 'gdpr' && $_GET['term'] != 'indemnity' && $_GET['term'] != 'privacy'  && $_GET['term'] != 'refer-and-earn'  && $_GET['term'] != 'refund-policy'  && $_GET['term'] != 'terms-and-condition'  && $_GET['term'] != 'terms-of-use'){
                header("location:https://cashkar.in/terms/cookie/");
            }
            ?>
         <?php include "../footer.php";?>
         <!-- Bootstrap core JavaScript -->
         <script src="vendor/jquery/jquery.min.js"></script>
         <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
         <!-- Menu Toggle Script -->
         <script>
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
            /* Set the width of the side navigation to 250px */
            function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            }
            
            /* Set the width of the side navigation to 0 */
            function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            }
         </script>
      </div>
   </body>
</html>