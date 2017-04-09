<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/slate/bootstrap.min.css" rel="stylesheet" integrity="sha384-RpX8okQqCyUNG7PlOYNybyJXYTtGQH+7rIKiVvg1DLg6jahLEk47VvpUyS+E2/uJ" crossorigin="anonymous">
    <style media="screen">
        @import url(http://fonts.googleapis.com/css?family=Lato:100,300,400,700);
        @import url(http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);

        html {
          height: 100%;
          font-family: 'Lato', sans-serif;
          -webkit-user-select: none;
        }
        .container {
          border-radius: 15px;
          -webkit-box-shadow: 0px 0px 5px 5px rgba(44,62,80,0.25);
          -moz-box-shadow: 0px 0px 5px 5px rgba(44,62,80,0.25);
          box-shadow: 0px 0px 5px 5px rgba(44,62,80,0.25);
        }
        .anket {
        position: absolute;
        top: 50%;
        left: 50%;
        margin: -150px 0 0 -150px;
        width:40%;
        }

        input,select {
        width: 100%;
        margin-bottom: 10px;
        background: rgba(0,0,0,0.3);
        border: none;
        outline: none;
        padding: 10px;
        font-size: 13px;
        color: #fff;
        text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
        border: 1px solid rgba(0,0,0,0.3);
        border-radius: 4px;
        box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
        -webkit-transition: box-shadow .5s ease;
        -moz-transition: box-shadow .5s ease;
        -o-transition: box-shadow .5s ease;
        -ms-transition: box-shadow .5s ease;
        transition: box-shadow .5s ease;
        }
        input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }

        body {
          height: 100%;
          margin: 0;
          background: #252C33;
        }
        * {
          box-sizing: border-box;
        }
        a:link {
            color: white;
            text-decoration: none;
        }

        /* visited link */
        a:visited {
            color: white;
            text-decoration: none;
        }

        /* mouse over link */
        a:hover {
            color: white;
            text-decoration: none;
        }

        /* selected link */
        a:active {
            color: white;
            text-decoration: none;
        }
        /* SCROLL BAR*/

        ::-webkit-scrollbar {
          min-width: 12px;
          width: 12px;
          max-width: 12px;
          min-height: 12px;
          height: 12px;
          max-height: 12px;
          background-color: #252C33;
        }
        ::-webkit-scrollbar-thumb {
          background: rgba(255,255,255,0.1);
            border: solid 3px #252C33;
            border-radius: 100px;
        }
        ::-webkit-scrollbar-thumb:hover {
          background: rgba(255,255,255,0.2);
        }
        ::-webkit-scrollbar-thumb:active {
          background: rgba(255,255,255,0.2);
        }
        ::-webkit-scrollbar-button {
          display: none;
            height: 0px;
        }

        /* CONTAINER */
        #container {
          display: table;
          width: 100%;
          background: #252C33;
          margin: 0px auto;
          border-radius: 0px;
        }

        /* Side Bar */
        #sideMenu {
          width: 240px;
          height: 100%;
          padding: 30px;
          border-right: 1px solid rgba(0,0,0,.1);
          background: #1b232a;
          display: table-cell;
          vertical-align: top;
          color: #fff;
        }
        #sideMenuFixed{
          position: fixed;
          top: 0px;
          left: 0px;
          width: 240px;
          height: 100%;
          padding: 30px;
          border-right: 1px solid rgba(0,0,0,.1);
          background: #1b232a;
          z-index: 9;
        }
        #sidecontent{
          position: fixed;
          width: 200px;
          z-index: 10;
        }
        h1:first-child{
          color: #59ABE3;
          text-shadow: 5px 5px 0px rgba(0,0,0,.2);
          font-weight: 700;
          font-size: 27px;
          margin-left: -8px;
        }
        .menu {
          list-style: none;
          margin:  24px 0;
          padding: 0;
          width: 100%;
        }
        .menu li {
          display: block;
          height: 30px;
          width: 100%;
          line-height: 30px;
          font-size: 14px;
          font-weight: 300;
          color: rgba(255, 255, 255, .7);
          position: relative;
          cursor: pointer;
        }
        .menu li:hover {
          color: #FFF;
        }
        .menu li:first-child {
          height: 35px;
          line-height: 35px;
          font-size: 16px;
          font-weight: 700;
          color: #DDD;
          background: rgba(0,0,0,.08);
          margin-left: -18px;
          padding: 0px 10px;
          border-radius: 8px;
          cursor: default;
        }
        .addCategory {
          font-size: 13px;
          font-weight: 200;
          color: rgba(255, 255, 255, .2);
        }
        .addCategory:hover {
          color: #fff;
        }

        /* Content */
        #content {
          width: calc(100% - 240px);
          height: 100%;
          padding: 25px;
          display: table-cell;
        }
        #titleBar {
          height: 36px;
          margin-bottom: 30px;
          margin-right: -15px;
        }
        #profilePic {
          width: 50px;
          height: 50px;
          border-radius: 100%;
          background: #666;
          float: right;
          margin-top: -15px;
          margin-left: 16px;
          overflow: hidden;
          box-shadow: 0px 0px 5px #1b232a, 0px 0px 10px #1b232a;
        }
        #profilePic img {
          width: 100%;
        }
        #profilePic:hover ~ .options{
          opacity: .95;
          top: 65px;
          visibility: visible;
          transition: .2s cubic-bezier(0.565, -0.260, 0.255, 1.410);
        }
        .options:hover, .options:active, .options:focus{
          opacity: .95;
          top: 65px;
          visibility: visible;
          transition: .2s cubic-bezier(0.565, -0.260, 0.255, 1.410);
        }
        .options{
          position: absolute;
          visibility: hidden;
          top: 60px;
          right: 5px;
          width: 250px;
          height: 250px;
          background: #FAFAFA;
          box-shadow: 0px 0px 5px #1b232a, 0px 0px 10px #1b232a;
          opacity: 0;
          border-radius: 5px;
          padding-top: 40px;
          transition: .2s cubic-bezier(0.565, -0.260, 0.255, 1.410);
        }
        .options:after {
          border: solid transparent;
          content: " ";
          height: 0px;
          width: 0px;
          bottom: 100%;
          right: 20px;
          position: absolute;
          border-color: transparent;
          border-width: 10px;
          border-bottom-color: #FAFAFA;
          margin-left: -10px;
        }
        .options hr{
          width: 100%;
          display: block;
          border: solid 1px #EEE;
          margin-bottom: 0px;
        }
        .options .username{
          position: absolute;
          top: 10px;
          left: 0px;
          width: 100%;
          text-align: center;
          font-size: 18px;
          font-weight: 700;
          padding-top: 5px;
          color: rgba(37,44,51,.65);
        }
        .options .pro{
          position: absolute;
          bottom: 6px;
          left: 6px;
          background: #F9BF3B;
          border-radius: 3px;
          color: #333;
          font-size: 11px;
          padding: 7px;
          font-weight: 700;
          text-decoration: none;
          box-shadow: inset 0px -10px 10px rgba(0,0,0,.07);
        }
        .options .pro span{
          font-size: 0px;
          font-weight: 400;
          transition: .2s cubic-bezier(0.565, -0.260, 0.255, 1.410);
        }
        .options .pro:hover span{
          font-size: 11px;
          transition: .2s cubic-bezier(0.565, -0.260, 0.255, 1.410);
        }
        .options .logout{
          position: absolute;
          bottom: 6px;
          right: 6px;
          background: #EF4836;
          border-radius: 3px;
          color: #FFF;
          font-size: 11px;
          padding: 7px;
          font-weight: 700;
          text-decoration: none;
          box-shadow: inset 0px -10px 10px rgba(0,0,0,.07);
        }
        .options .logout i{
          transform: scale(1.6);
          margin-left: 8px;
        }
        .options .option{
          display: block;
          width: 100%;
          padding: 10px 10px;
          color: #333;
          cursor: pointer;
          text-decoration: none;
        }
        .options .option i{
          width: 30px;
          transform: scale(1.4);
          margin-right: 0px;
          margin-left: 5px;
          color: #5B5B5B;
        }
        .options .option:hover i{
          color: #FFF;
        }
        .options .option:hover{
          color: #FFF;
          background: rgba(89,171,227,0.7);
        }
        .options .option:active{
          color: #FFF;
          background: rgba(89,171,227,0.9);
        }

        .controls {
          display: block;
          width: 80px;
          height: 24px;
          color: rgba(255, 255, 255, 0.5);
          font-size: 10px;
          font-weight: 300;
          text-transform: uppercase;
          text-align: center;
          line-height: 20px;
          float: right;
          border-top-left-radius: 20px;
          border-bottom-left-radius: 20px;
          margin: 0px 0px;
          cursor: pointer;
          border: solid 2px rgba(255, 255, 255, 0.01);
          background: rgba(255, 255, 255, 0.05);
        }
        .controls:hover, .controls:active {
          border-color: rgba(255, 255, 255, 0.01);
          background: rgba(255, 255, 255, 0.08);
        }
        .activeControl, .activeControl:hover {
          background: rgba(255, 255, 255, 0.9);
          border-color: rgba(255, 255, 255, 0.8);
          box-shadow: inset 0px -7px 10px rgba(0,0,0,.07);
          border-radius: 0px;
          border-top-right-radius: 20px;
          border-bottom-right-radius: 20px;
          color: #202b33;
          font-weight: 600;
        }
        #salesData {
          margin-bottom: 60px;
        }
        #totalSales {
          height: 120px;
          position: relative;
          margin-top: 24px;
          margin-bottom: 50px;
        }
        #totalSales .col {
          float: left;
          width: 33.33%;
          height: 100%;
        }
        #totalSales .col .progressTitle {
          float: left;
          margin-left: 20px;
          font-weight: 300;
          color: rgba(255, 255, 255, 0.4);
        }
        .progressBar {
          float: left;
          height: 120px;
          width: 120px;
          font-size: 40px;
          text-align: center;
          line-height: 120px;
        }

        /* Icons */
        .notification {
          display: block;
          width: 20px;
          height: 20px;
          color: #202b33;
          text-shadow: 0px 0px 20px rgba(255,255,255,.7);
          font-weight: 700;
          line-height: 20px;
          text-align: center;
          border-radius: 50%;
          background: #59ABE3;
          position: absolute;
          top: 0; bottom: 0; right: 2%;
          margin: auto;
          transition: .3s ease;
        }
        ul.menu li:hover .notification {
          text-shadow: 0px 0px 30px rgba(255,255,255,1);
          transition: .3s ease;
        }
        .colorIcon {
          display: block;
          width: 10px;
          height: 10px;
          border-radius: 50%;
          position: absolute;
          top: 0; bottom: 0; right: 2%;
          margin: auto;
        }
        .plus {
          display: inline-block;
          width: 20px;
          height: 20px;
          color: #202b33;
          font-weight: 600;
          font-size: 16px;
          line-height: 8px;
          padding: 4px;
          margin-right: 6px;
          border: 2px solid rgba(255, 255, 255, .2);
          border-radius: 50%;
          color: rgba(255, 255, 255, .2);
        }
        .red {
          background: #F7505A;
        }
        .orange {
          background: #ff9939;
        }
        .green {
          background: #2bab51;
        }

        /* Table */
        table {
          width: 100%;
          border-collapse: collapse;
        }
        th {
          text-align: left;
          color: #fff;
          font-weight: 400;
          font-size: 13px;
          text-transform: uppercase;
          border-bottom: 1px solid rgba(255, 255, 255, 0.1);
          padding: 0 10px;
          padding-bottom: 14px;
        }
        tr:not(:first-child):hover {
          background: rgba(255, 255, 255, 0.03);
        }
        td {
          height: 40px;
          line-height: 40px;
          font-weight: 300;
          color: rgba(255, 255, 255, 0.4);
          padding: 0 10px;
        }
        /* Headers */
        h1 {
          font-size: 13px;
          font-weight: 200;
          letter-spacing: 1px;
          text-transform: uppercase;
          margin: 0;
        }
        h2 {
          float: left;
          font-size: 19px;
          font-weight: 200;
          letter-spacing: 1px;
          margin: 0;
          color: rgba(255, 255, 255, .8);
        }
        h3 {
          float: left;
          color: #fff;
          font-size: 32px;
          font-weight: 300;
          margin: 0;
          margin-top: 8%;
          margin-left: 20px;
          margin-bottom: 6px;
        }

        .clearFix {
          clear: both;
        }</style>
  </head>
  <body>
      <div id="container">
        <div id="sideMenu">
          <div id="sideMenuFixed"></div>
          <div id="sidecontent">
            <h1>P <i class="fa fa-pie-chart"></i> O L L</h1>
