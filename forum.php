<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>討論區</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/sl-slide.css">

  <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.js">

    </script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js">

    </script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js">

    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" media="screen" title="no title">
    <script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable();
    } );
    </script>
  <!-- Le fav and touch icons -->
  <?php
    include("ico.php");
   ?>

</head>

<body>

  <!--Header-->
  <header class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <!--
        <a id="logo" class="pull-left" href="index.html"></a>
      -->
      <div class="nav-collapse collapse pull-right">
        <form class="navbar-search pull-left" action="" method="">
          <input type="text" class="search-query" placeholder="要去哪ㄜ...?">
        </form>

        <ul class="nav">
          <li>
            <a href="index.php">首頁</a>
          </li>
          <li>
            <a href="about.php">認識高雄</a>
          </li>
          <li class="dropdown">
            <a href="view.php" class="dropdown-toggle" data-toggle="dropdown">景點
              <i class="icon-angle-down"></i>
            </a>
            <div class="dropdown-menu">
              <table class="table table-hover ">
                <tr >
                  <td><a href="view.php">首頁</a></td>
                  <td><a href="area.php">地區名</a></td>
                </tr>
              </table>
            </div>
          </li>

          <li class="active"><a href="forum.php">討論區</a></li>
          <!--<li><a href="contact-us.html">Contact</a></li>-->
          <li class="login">
            <a data-toggle="modal" href="#loginForm"><i class="icon-user"></i></a>
          </li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
  </header>

 <!-- /header -->

  <section class="title">
    <div class="container">
      <div class="row-fluid">
        <div class="span6">
          <h1>討論區</h1>
        </div>
        <div class="span6">
          <ul class="breadcrumb pull-right">
            <li>
              <a href="index.php">首頁</a>
              <span class="divider">/</span>
            </li>

            <li class="active">討論區</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- / .title -->

  <!-- Career -->
  <section id="career" class="container">
    <div class="span12">
      <ul class="gallery col-4">
        <!--Item 1-->
        <li>
          <div class="preview">
            <a href="message.php">
              <input type="submit" class="btn btn-mini btn-primary" value="發表主題">
            </a>
          </div>
        </li>
      </div>

    <br/>
<!--
    <table class="table table-striped table-bordered table-hover">
      <thead>
        <tr align="center">
          <th width="30%" >主題</th>
          <th>回覆</th>
          <th>發表人</th>
          <th>觀看</th>
          <th>最新回應</th>
        </tr>
      </thead>

      <tbody  align="center">
        <tr>
          <td>test</td>
          <td>(記綠總共有幾則)</td>
          <td>(訪客、抓取會員名)</td>
          <td>(觀看次數)</td>
          <td>Y/H/M</td>
        </tr>
        <tr>
          <td>test</td>
          <td>(記綠總共有幾則)</td>
          <td>(訪客、抓取會員名)</td>
          <td>(觀看次數)</td>
          <td>Y/H/M</td>
        </tr>
        <tr>
          <td>test</td>
          <td>(記綠總共有幾則)</td>
          <td>(訪客、抓取會員名)</td>
          <td>(觀看次數)</td>
          <td>Y/H/M</td>
        </tr>
        <tr>
          <td>test</td>
          <td>(記綠總共有幾則)</td>
          <td>(訪客、抓取會員名)</td>
          <td>(觀看次數)</td>
          <td>Y/H/M</td>
        </tr>
        <tr>
          <td>test</td>
          <td>(記綠總共有幾則)</td>
          <td>(訪客、抓取會員名)</td>
          <td>(觀看次數)</td>
          <td>Y/H/M</td>
        </tr>

      </tbody>
    </table>
 -->
 <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
           <thead>
               <tr>
                   <th>Name</th>
                   <th>Position</th>
                   <th>Office</th>
                   <th>Age</th>
                   <th>Start date</th>
                   <th>Salary</th>
               </tr>
           </thead>
           <tfoot>
               <tr>
                   <th>Name</th>
                   <th>Position</th>
                   <th>Office</th>
                   <th>Age</th>
                   <th>Start date</th>
                   <th>Salary</th>
               </tr>
           </tfoot>
           <tbody>
               <tr>
                   <td>Tiger Nixon</td>
                   <td>System Architect</td>
                   <td>Edinburgh</td>
                   <td>61</td>
                   <td>2011/04/25</td>
                   <td>$320,800</td>
               </tr>
               <tr>
                   <td>Garrett Winters</td>
                   <td>Accountant</td>
                   <td>Tokyo</td>
                   <td>63</td>
                   <td>2011/07/25</td>
                   <td>$170,750</td>
               </tr>
               <tr>
                   <td>Ashton Cox</td>
                   <td>Junior Technical Author</td>
                   <td>San Francisco</td>
                   <td>66</td>
                   <td>2009/01/12</td>
                   <td>$86,000</td>
               </tr>
               <tr>
                   <td>Cedric Kelly</td>
                   <td>Senior Javascript Developer</td>
                   <td>Edinburgh</td>
                   <td>22</td>
                   <td>2012/03/29</td>
                   <td>$433,060</td>
               </tr>
               <tr>
                   <td>Airi Satou</td>
                   <td>Accountant</td>
                   <td>Tokyo</td>
                   <td>33</td>
                   <td>2008/11/28</td>
                   <td>$162,700</td>
               </tr>
               <tr>
                   <td>Brielle Williamson</td>
                   <td>Integration Specialist</td>
                   <td>New York</td>
                   <td>61</td>
                   <td>2012/12/02</td>
                   <td>$372,000</td>
               </tr>
               <tr>
                   <td>Herrod Chandler</td>
                   <td>Sales Assistant</td>
                   <td>San Francisco</td>
                   <td>59</td>
                   <td>2012/08/06</td>
                   <td>$137,500</td>
               </tr>
               <tr>
                   <td>Rhona Davidson</td>
                   <td>Integration Specialist</td>
                   <td>Tokyo</td>
                   <td>55</td>
                   <td>2010/10/14</td>
                   <td>$327,900</td>
               </tr>
               <tr>
                   <td>Colleen Hurst</td>
                   <td>Javascript Developer</td>
                   <td>San Francisco</td>
                   <td>39</td>
                   <td>2009/09/15</td>
                   <td>$205,500</td>
               </tr>
               <tr>
                   <td>Sonya Frost</td>
                   <td>Software Engineer</td>
                   <td>Edinburgh</td>
                   <td>23</td>
                   <td>2008/12/13</td>
                   <td>$103,600</td>
               </tr>
               <tr>
                   <td>Jena Gaines</td>
                   <td>Office Manager</td>
                   <td>London</td>
                   <td>30</td>
                   <td>2008/12/19</td>
                   <td>$90,560</td>
               </tr>
               <tr>
                   <td>Quinn Flynn</td>
                   <td>Support Lead</td>
                   <td>Edinburgh</td>
                   <td>22</td>
                   <td>2013/03/03</td>
                   <td>$342,000</td>
               </tr>
               <tr>
                   <td>Charde Marshall</td>
                   <td>Regional Director</td>
                   <td>San Francisco</td>
                   <td>36</td>
                   <td>2008/10/16</td>
                   <td>$470,600</td>
               </tr>
               <tr>
                   <td>Haley Kennedy</td>
                   <td>Senior Marketing Designer</td>
                   <td>London</td>
                   <td>43</td>
                   <td>2012/12/18</td>
                   <td>$313,500</td>
               </tr>
               <tr>
                   <td>Tatyana Fitzpatrick</td>
                   <td>Regional Director</td>
                   <td>London</td>
                   <td>19</td>
                   <td>2010/03/17</td>
                   <td>$385,750</td>
               </tr>
               <tr>
                   <td>Michael Silva</td>
                   <td>Marketing Designer</td>
                   <td>London</td>
                   <td>66</td>
                   <td>2012/11/27</td>
                   <td>$198,500</td>
               </tr>
               <tr>
                   <td>Paul Byrd</td>
                   <td>Chief Financial Officer (CFO)</td>
                   <td>New York</td>
                   <td>64</td>
                   <td>2010/06/09</td>
                   <td>$725,000</td>
               </tr>
               <tr>
                   <td>Gloria Little</td>
                   <td>Systems Administrator</td>
                   <td>New York</td>
                   <td>59</td>
                   <td>2009/04/10</td>
                   <td>$237,500</td>
               </tr>
               <tr>
                   <td>Bradley Greer</td>
                   <td>Software Engineer</td>
                   <td>London</td>
                   <td>41</td>
                   <td>2012/10/13</td>
                   <td>$132,000</td>
               </tr>
               <tr>
                   <td>Dai Rios</td>
                   <td>Personnel Lead</td>
                   <td>Edinburgh</td>
                   <td>35</td>
                   <td>2012/09/26</td>
                   <td>$217,500</td>
               </tr>
               <tr>
                   <td>Jenette Caldwell</td>
                   <td>Development Lead</td>
                   <td>New York</td>
                   <td>30</td>
                   <td>2011/09/03</td>
                   <td>$345,000</td>
               </tr>
               <tr>
                   <td>Yuri Berry</td>
                   <td>Chief Marketing Officer (CMO)</td>
                   <td>New York</td>
                   <td>40</td>
                   <td>2009/06/25</td>
                   <td>$675,000</td>
               </tr>
               <tr>
                   <td>Caesar Vance</td>
                   <td>Pre-Sales Support</td>
                   <td>New York</td>
                   <td>21</td>
                   <td>2011/12/12</td>
                   <td>$106,450</td>
               </tr>
               <tr>
                   <td>Doris Wilder</td>
                   <td>Sales Assistant</td>
                   <td>Sidney</td>
                   <td>23</td>
                   <td>2010/09/20</td>
                   <td>$85,600</td>
               </tr>
               <tr>
                   <td>Angelica Ramos</td>
                   <td>Chief Executive Officer (CEO)</td>
                   <td>London</td>
                   <td>47</td>
                   <td>2009/10/09</td>
                   <td>$1,200,000</td>
               </tr>
               <tr>
                   <td>Gavin Joyce</td>
                   <td>Developer</td>
                   <td>Edinburgh</td>
                   <td>42</td>
                   <td>2010/12/22</td>
                   <td>$92,575</td>
               </tr>
               <tr>
                   <td>Jennifer Chang</td>
                   <td>Regional Director</td>
                   <td>Singapore</td>
                   <td>28</td>
                   <td>2010/11/14</td>
                   <td>$357,650</td>
               </tr>
               <tr>
                   <td>Brenden Wagner</td>
                   <td>Software Engineer</td>
                   <td>San Francisco</td>
                   <td>28</td>
                   <td>2011/06/07</td>
                   <td>$206,850</td>
               </tr>
               <tr>
                   <td>Fiona Green</td>
                   <td>Chief Operating Officer (COO)</td>
                   <td>San Francisco</td>
                   <td>48</td>
                   <td>2010/03/11</td>
                   <td>$850,000</td>
               </tr>
               <tr>
                   <td>Shou Itou</td>
                   <td>Regional Marketing</td>
                   <td>Tokyo</td>
                   <td>20</td>
                   <td>2011/08/14</td>
                   <td>$163,000</td>
               </tr>
               <tr>
                   <td>Michelle House</td>
                   <td>Integration Specialist</td>
                   <td>Sidney</td>
                   <td>37</td>
                   <td>2011/06/02</td>
                   <td>$95,400</td>
               </tr>
               <tr>
                   <td>Suki Burks</td>
                   <td>Developer</td>
                   <td>London</td>
                   <td>53</td>
                   <td>2009/10/22</td>
                   <td>$114,500</td>
               </tr>
               <tr>
                   <td>Prescott Bartlett</td>
                   <td>Technical Author</td>
                   <td>London</td>
                   <td>27</td>
                   <td>2011/05/07</td>
                   <td>$145,000</td>
               </tr>
               <tr>
                   <td>Gavin Cortez</td>
                   <td>Team Leader</td>
                   <td>San Francisco</td>
                   <td>22</td>
                   <td>2008/10/26</td>
                   <td>$235,500</td>
               </tr>
               <tr>
                   <td>Martena Mccray</td>
                   <td>Post-Sales support</td>
                   <td>Edinburgh</td>
                   <td>46</td>
                   <td>2011/03/09</td>
                   <td>$324,050</td>
               </tr>
               <tr>
                   <td>Unity Butler</td>
                   <td>Marketing Designer</td>
                   <td>San Francisco</td>
                   <td>47</td>
                   <td>2009/12/09</td>
                   <td>$85,675</td>
               </tr>
               <tr>
                   <td>Howard Hatfield</td>
                   <td>Office Manager</td>
                   <td>San Francisco</td>
                   <td>51</td>
                   <td>2008/12/16</td>
                   <td>$164,500</td>
               </tr>
               <tr>
                   <td>Hope Fuentes</td>
                   <td>Secretary</td>
                   <td>San Francisco</td>
                   <td>41</td>
                   <td>2010/02/12</td>
                   <td>$109,850</td>
               </tr>
               <tr>
                   <td>Vivian Harrell</td>
                   <td>Financial Controller</td>
                   <td>San Francisco</td>
                   <td>62</td>
                   <td>2009/02/14</td>
                   <td>$452,500</td>
               </tr>
               <tr>
                   <td>Timothy Mooney</td>
                   <td>Office Manager</td>
                   <td>London</td>
                   <td>37</td>
                   <td>2008/12/11</td>
                   <td>$136,200</td>
               </tr>
               <tr>
                   <td>Jackson Bradshaw</td>
                   <td>Director</td>
                   <td>New York</td>
                   <td>65</td>
                   <td>2008/09/26</td>
                   <td>$645,750</td>
               </tr>
               <tr>
                   <td>Olivia Liang</td>
                   <td>Support Engineer</td>
                   <td>Singapore</td>
                   <td>64</td>
                   <td>2011/02/03</td>
                   <td>$234,500</td>
               </tr>
               <tr>
                   <td>Bruno Nash</td>
                   <td>Software Engineer</td>
                   <td>London</td>
                   <td>38</td>
                   <td>2011/05/03</td>
                   <td>$163,500</td>
               </tr>
               <tr>
                   <td>Sakura Yamamoto</td>
                   <td>Support Engineer</td>
                   <td>Tokyo</td>
                   <td>37</td>
                   <td>2009/08/19</td>
                   <td>$139,575</td>
               </tr>
               <tr>
                   <td>Thor Walton</td>
                   <td>Developer</td>
                   <td>New York</td>
                   <td>61</td>
                   <td>2013/08/11</td>
                   <td>$98,540</td>
               </tr>
               <tr>
                   <td>Finn Camacho</td>
                   <td>Support Engineer</td>
                   <td>San Francisco</td>
                   <td>47</td>
                   <td>2009/07/07</td>
                   <td>$87,500</td>
               </tr>
               <tr>
                   <td>Serge Baldwin</td>
                   <td>Data Coordinator</td>
                   <td>Singapore</td>
                   <td>64</td>
                   <td>2012/04/09</td>
                   <td>$138,575</td>
               </tr>
               <tr>
                   <td>Zenaida Frank</td>
                   <td>Software Engineer</td>
                   <td>New York</td>
                   <td>63</td>
                   <td>2010/01/04</td>
                   <td>$125,250</td>
               </tr>
               <tr>
                   <td>Zorita Serrano</td>
                   <td>Software Engineer</td>
                   <td>San Francisco</td>
                   <td>56</td>
                   <td>2012/06/01</td>
                   <td>$115,000</td>
               </tr>
               <tr>
                   <td>Jennifer Acosta</td>
                   <td>Junior Javascript Developer</td>
                   <td>Edinburgh</td>
                   <td>43</td>
                   <td>2013/02/01</td>
                   <td>$75,650</td>
               </tr>
               <tr>
                   <td>Cara Stevens</td>
                   <td>Sales Assistant</td>
                   <td>New York</td>
                   <td>46</td>
                   <td>2011/12/06</td>
                   <td>$145,600</td>
               </tr>
               <tr>
                   <td>Hermione Butler</td>
                   <td>Regional Director</td>
                   <td>London</td>
                   <td>47</td>
                   <td>2011/03/21</td>
                   <td>$356,250</td>
               </tr>
               <tr>
                   <td>Lael Greer</td>
                   <td>Systems Administrator</td>
                   <td>London</td>
                   <td>21</td>
                   <td>2009/02/27</td>
                   <td>$103,500</td>
               </tr>
               <tr>
                   <td>Jonas Alexander</td>
                   <td>Developer</td>
                   <td>San Francisco</td>
                   <td>30</td>
                   <td>2010/07/14</td>
                   <td>$86,500</td>
               </tr>
               <tr>
                   <td>Shad Decker</td>
                   <td>Regional Director</td>
                   <td>Edinburgh</td>
                   <td>51</td>
                   <td>2008/11/13</td>
                   <td>$183,000</td>
               </tr>
               <tr>
                   <td>Michael Bruce</td>
                   <td>Javascript Developer</td>
                   <td>Singapore</td>
                   <td>29</td>
                   <td>2011/06/27</td>
                   <td>$183,000</td>
               </tr>
               <tr>
                   <td>Donna Snider</td>
                   <td>Customer Support</td>
                   <td>New York</td>
                   <td>27</td>
                   <td>2011/01/25</td>
                   <td>$112,000</td>
               </tr>
           </tbody>
       </table>


    <p>&nbsp;</p>
    <!-- <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                    <td>$170,750</td>
                </tr>
                <tr>
                    <td>Ashton Cox</td>
                    <td>Junior Technical Author</td>
                    <td>San Francisco</td>
                    <td>66</td>
                    <td>2009/01/12</td>
                    <td>$86,000</td>
                </tr>
                <tr>
                    <td>Cedric Kelly</td>
                    <td>Senior Javascript Developer</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2012/03/29</td>
                    <td>$433,060</td>
                </tr>
                <tr>
                    <td>Airi Satou</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>33</td>
                    <td>2008/11/28</td>
                    <td>$162,700</td>
                </tr>
                <tr>
                    <td>Brielle Williamson</td>
                    <td>Integration Specialist</td>
                    <td>New York</td>
                    <td>61</td>
                    <td>2012/12/02</td>
                    <td>$372,000</td>
                </tr>
                <tr>
                    <td>Herrod Chandler</td>
                    <td>Sales Assistant</td>
                    <td>San Francisco</td>
                    <td>59</td>
                    <td>2012/08/06</td>
                    <td>$137,500</td>
                </tr>
                <tr>
                    <td>Rhona Davidson</td>
                    <td>Integration Specialist</td>
                    <td>Tokyo</td>
                    <td>55</td>
                    <td>2010/10/14</td>
                    <td>$327,900</td>
                </tr>
                <tr>
                    <td>Colleen Hurst</td>
                    <td>Javascript Developer</td>
                    <td>San Francisco</td>
                    <td>39</td>
                    <td>2009/09/15</td>
                    <td>$205,500</td>
                </tr>
                <tr>
                    <td>Sonya Frost</td>
                    <td>Software Engineer</td>
                    <td>Edinburgh</td>
                    <td>23</td>
                    <td>2008/12/13</td>
                    <td>$103,600</td>
                </tr>
                <tr>
                    <td>Jena Gaines</td>
                    <td>Office Manager</td>
                    <td>London</td>
                    <td>30</td>
                    <td>2008/12/19</td>
                    <td>$90,560</td>
                </tr>
                <tr>
                    <td>Quinn Flynn</td>
                    <td>Support Lead</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2013/03/03</td>
                    <td>$342,000</td>
                </tr>
                <tr>
                    <td>Charde Marshall</td>
                    <td>Regional Director</td>
                    <td>San Francisco</td>
                    <td>36</td>
                    <td>2008/10/16</td>
                    <td>$470,600</td>
                </tr>
                <tr>
                    <td>Haley Kennedy</td>
                    <td>Senior Marketing Designer</td>
                    <td>London</td>
                    <td>43</td>
                    <td>2012/12/18</td>
                    <td>$313,500</td>
                </tr>
                <tr>
                    <td>Tatyana Fitzpatrick</td>
                    <td>Regional Director</td>
                    <td>London</td>
                    <td>19</td>
                    <td>2010/03/17</td>
                    <td>$385,750</td>
                </tr>
                <tr>
                    <td>Michael Silva</td>
                    <td>Marketing Designer</td>
                    <td>London</td>
                    <td>66</td>
                    <td>2012/11/27</td>
                    <td>$198,500</td>
                </tr>
                <tr>
                    <td>Paul Byrd</td>
                    <td>Chief Financial Officer (CFO)</td>
                    <td>New York</td>
                    <td>64</td>
                    <td>2010/06/09</td>
                    <td>$725,000</td>
                </tr>
                <tr>
                    <td>Gloria Little</td>
                    <td>Systems Administrator</td>
                    <td>New York</td>
                    <td>59</td>
                    <td>2009/04/10</td>
                    <td>$237,500</td>
                </tr>
                <tr>
                    <td>Bradley Greer</td>
                    <td>Software Engineer</td>
                    <td>London</td>
                    <td>41</td>
                    <td>2012/10/13</td>
                    <td>$132,000</td>
                </tr>
                <tr>
                    <td>Dai Rios</td>
                    <td>Personnel Lead</td>
                    <td>Edinburgh</td>
                    <td>35</td>
                    <td>2012/09/26</td>
                    <td>$217,500</td>
                </tr>
                <tr>
                    <td>Jenette Caldwell</td>
                    <td>Development Lead</td>
                    <td>New York</td>
                    <td>30</td>
                    <td>2011/09/03</td>
                    <td>$345,000</td>
                </tr>
                <tr>
                    <td>Yuri Berry</td>
                    <td>Chief Marketing Officer (CMO)</td>
                    <td>New York</td>
                    <td>40</td>
                    <td>2009/06/25</td>
                    <td>$675,000</td>
                </tr>
                <tr>
                    <td>Caesar Vance</td>
                    <td>Pre-Sales Support</td>
                    <td>New York</td>
                    <td>21</td>
                    <td>2011/12/12</td>
                    <td>$106,450</td>
                </tr>
                <tr>
                    <td>Doris Wilder</td>
                    <td>Sales Assistant</td>
                    <td>Sidney</td>
                    <td>23</td>
                    <td>2010/09/20</td>
                    <td>$85,600</td>
                </tr>
                <tr>
                    <td>Angelica Ramos</td>
                    <td>Chief Executive Officer (CEO)</td>
                    <td>London</td>
                    <td>47</td>
                    <td>2009/10/09</td>
                    <td>$1,200,000</td>
                </tr>
                <tr>
                    <td>Gavin Joyce</td>
                    <td>Developer</td>
                    <td>Edinburgh</td>
                    <td>42</td>
                    <td>2010/12/22</td>
                    <td>$92,575</td>
                </tr>
                <tr>
                    <td>Jennifer Chang</td>
                    <td>Regional Director</td>
                    <td>Singapore</td>
                    <td>28</td>
                    <td>2010/11/14</td>
                    <td>$357,650</td>
                </tr>
                <tr>
                    <td>Brenden Wagner</td>
                    <td>Software Engineer</td>
                    <td>San Francisco</td>
                    <td>28</td>
                    <td>2011/06/07</td>
                    <td>$206,850</td>
                </tr>
                <tr>
                    <td>Fiona Green</td>
                    <td>Chief Operating Officer (COO)</td>
                    <td>San Francisco</td>
                    <td>48</td>
                    <td>2010/03/11</td>
                    <td>$850,000</td>
                </tr>
                <tr>
                    <td>Shou Itou</td>
                    <td>Regional Marketing</td>
                    <td>Tokyo</td>
                    <td>20</td>
                    <td>2011/08/14</td>
                    <td>$163,000</td>
                </tr>
                <tr>
                    <td>Michelle House</td>
                    <td>Integration Specialist</td>
                    <td>Sidney</td>
                    <td>37</td>
                    <td>2011/06/02</td>
                    <td>$95,400</td>
                </tr>
                <tr>
                    <td>Suki Burks</td>
                    <td>Developer</td>
                    <td>London</td>
                    <td>53</td>
                    <td>2009/10/22</td>
                    <td>$114,500</td>
                </tr>
                <tr>
                    <td>Prescott Bartlett</td>
                    <td>Technical Author</td>
                    <td>London</td>
                    <td>27</td>
                    <td>2011/05/07</td>
                    <td>$145,000</td>
                </tr>
                <tr>
                    <td>Gavin Cortez</td>
                    <td>Team Leader</td>
                    <td>San Francisco</td>
                    <td>22</td>
                    <td>2008/10/26</td>
                    <td>$235,500</td>
                </tr>
                <tr>
                    <td>Martena Mccray</td>
                    <td>Post-Sales support</td>
                    <td>Edinburgh</td>
                    <td>46</td>
                    <td>2011/03/09</td>
                    <td>$324,050</td>
                </tr>
                <tr>
                    <td>Unity Butler</td>
                    <td>Marketing Designer</td>
                    <td>San Francisco</td>
                    <td>47</td>
                    <td>2009/12/09</td>
                    <td>$85,675</td>
                </tr>
                <tr>
                    <td>Howard Hatfield</td>
                    <td>Office Manager</td>
                    <td>San Francisco</td>
                    <td>51</td>
                    <td>2008/12/16</td>
                    <td>$164,500</td>
                </tr>
                <tr>
                    <td>Hope Fuentes</td>
                    <td>Secretary</td>
                    <td>San Francisco</td>
                    <td>41</td>
                    <td>2010/02/12</td>
                    <td>$109,850</td>
                </tr>
                <tr>
                    <td>Vivian Harrell</td>
                    <td>Financial Controller</td>
                    <td>San Francisco</td>
                    <td>62</td>
                    <td>2009/02/14</td>
                    <td>$452,500</td>
                </tr>
                <tr>
                    <td>Timothy Mooney</td>
                    <td>Office Manager</td>
                    <td>London</td>
                    <td>37</td>
                    <td>2008/12/11</td>
                    <td>$136,200</td>
                </tr>
                <tr>
                    <td>Jackson Bradshaw</td>
                    <td>Director</td>
                    <td>New York</td>
                    <td>65</td>
                    <td>2008/09/26</td>
                    <td>$645,750</td>
                </tr>
                <tr>
                    <td>Olivia Liang</td>
                    <td>Support Engineer</td>
                    <td>Singapore</td>
                    <td>64</td>
                    <td>2011/02/03</td>
                    <td>$234,500</td>
                </tr>
                <tr>
                    <td>Bruno Nash</td>
                    <td>Software Engineer</td>
                    <td>London</td>
                    <td>38</td>
                    <td>2011/05/03</td>
                    <td>$163,500</td>
                </tr>
                <tr>
                    <td>Sakura Yamamoto</td>
                    <td>Support Engineer</td>
                    <td>Tokyo</td>
                    <td>37</td>
                    <td>2009/08/19</td>
                    <td>$139,575</td>
                </tr>
                <tr>
                    <td>Thor Walton</td>
                    <td>Developer</td>
                    <td>New York</td>
                    <td>61</td>
                    <td>2013/08/11</td>
                    <td>$98,540</td>
                </tr>
                <tr>
                    <td>Finn Camacho</td>
                    <td>Support Engineer</td>
                    <td>San Francisco</td>
                    <td>47</td>
                    <td>2009/07/07</td>
                    <td>$87,500</td>
                </tr>
                <tr>
                    <td>Serge Baldwin</td>
                    <td>Data Coordinator</td>
                    <td>Singapore</td>
                    <td>64</td>
                    <td>2012/04/09</td>
                    <td>$138,575</td>
                </tr>
                <tr>
                    <td>Zenaida Frank</td>
                    <td>Software Engineer</td>
                    <td>New York</td>
                    <td>63</td>
                    <td>2010/01/04</td>
                    <td>$125,250</td>
                </tr>
                <tr>
                    <td>Zorita Serrano</td>
                    <td>Software Engineer</td>
                    <td>San Francisco</td>
                    <td>56</td>
                    <td>2012/06/01</td>
                    <td>$115,000</td>
                </tr>
                <tr>
                    <td>Jennifer Acosta</td>
                    <td>Junior Javascript Developer</td>
                    <td>Edinburgh</td>
                    <td>43</td>
                    <td>2013/02/01</td>
                    <td>$75,650</td>
                </tr>
                <tr>
                    <td>Cara Stevens</td>
                    <td>Sales Assistant</td>
                    <td>New York</td>
                    <td>46</td>
                    <td>2011/12/06</td>
                    <td>$145,600</td>
                </tr>
                <tr>
                    <td>Hermione Butler</td>
                    <td>Regional Director</td>
                    <td>London</td>
                    <td>47</td>
                    <td>2011/03/21</td>
                    <td>$356,250</td>
                </tr>
                <tr>
                    <td>Lael Greer</td>
                    <td>Systems Administrator</td>
                    <td>London</td>
                    <td>21</td>
                    <td>2009/02/27</td>
                    <td>$103,500</td>
                </tr>
                <tr>
                    <td>Jonas Alexander</td>
                    <td>Developer</td>
                    <td>San Francisco</td>
                    <td>30</td>
                    <td>2010/07/14</td>
                    <td>$86,500</td>
                </tr>
                <tr>
                    <td>Shad Decker</td>
                    <td>Regional Director</td>
                    <td>Edinburgh</td>
                    <td>51</td>
                    <td>2008/11/13</td>
                    <td>$183,000</td>
                </tr>
                <tr>
                    <td>Michael Bruce</td>
                    <td>Javascript Developer</td>
                    <td>Singapore</td>
                    <td>29</td>
                    <td>2011/06/27</td>
                    <td>$183,000</td>
                </tr>
                <tr>
                    <td>Donna Snider</td>
                    <td>Customer Support</td>
                    <td>New York</td>
                    <td>27</td>
                    <td>2011/01/25</td>
                    <td>$112,000</td>
                </tr>
            </tbody>
        </table>
 -->

</section>
<!-- /Career -->


<!--Footer-->
<?php
  include("footer.php");
 ?>
<!--/Footer-->
<!--  Login form -->
<?php
  include("login-form.php");
 ?>
<!--  /Login form -->

<!-- <script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script> -->
<script src="js/main.js"></script>

</body>
</html>
