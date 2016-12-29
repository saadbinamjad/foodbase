<!DOCTYPE html>
<style type="text/css">

  #header {
    background: teal;
    color: #bbb;
    cursor: default;
    height: 3.25em;
    left: 0;
    line-height: 3.25em;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 10000;
  }

    #header h1 {
      color: inherit;
      height: inherit;
      left: 1.25em;
      line-height: inherit;
      margin: 0;
      padding: 0;
      position: absolute;
      top: 0;
    }

      #header h1 a {
        color: #fff;
        font-weight: 400;
        border: 0;
      }

    #header nav {
      height: inherit;
      line-height: inherit;
      position: absolute;
      right: 0.75em;
      top: 0;
      vertical-align: middle;
    }

      #header nav > ul {
        list-style: none;
        margin: 0;
        padding-left: 0;
      }

        #header nav > ul > li {
          display: inline-block;
          padding-left: 0;
        }

          #header nav > ul > li > ul {
            display: none;
          }

          #header nav > ul > li a {
            display: inline-block;
            height: 2em;
            line-height: 1.95em;
            padding: 0 1em;
            border-radius: 6px;
          }

          #header nav > ul > li a:not(.button) {
            color: #fff;
            display: inline-block;
            text-decoration: none;
            border: 0;
          }

            #header nav > ul > li a:not(.button).icon:before {
              color: #999;
              margin-right: 0.5em;
            }

          #header nav > ul > li:first-child {
            margin-left: 0;
          }

          #header nav > ul > li.active a:not(.button) {
            background-color: rgba(153, 153, 153, 0.25);
          }

          #header nav > ul > li .button {
            margin: 0 0 0 0.5em;
            position: relative;
          }

    #header input[type="submit"],
    #header input[type="reset"],
    #header input[type="button"],
    #header .button {
      background-color: transparent;
      box-shadow: inset 0 0 0 2px #999;
      color: #fff;
    }

      #header input[type="submit"]:hover,
      #header input[type="reset"]:hover,
      #header input[type="button"]:hover,
      #header .button:hover {
        background-color: rgba(153, 153, 153, 0.25);
      }

      #header input[type="submit"]:active,
      #header input[type="reset"]:active,
      #header input[type="button"]:active,
      #header .button:active {
        background-color: rgba(153, 153, 153, 0.5);
      }

    #header .container {
      position: relative;
    }

      #header .container h1 {
        left: 0;
      }

      #header .container nav {
        right: 0;
      }

    #header.reveal {
      -moz-animation: reveal-header 0.5s;
      -webkit-animation: reveal-header 0.5s;
      -o-animation: reveal-header 0.5s;
      -ms-animation: reveal-header 0.5s;
      animation: reveal-header 0.5s;
    }

    #header.alt {
      -moz-animation: none;
      -webkit-animation: none;
      -o-animation: none;
      -ms-animation: none;
      animation: none;
      background: none;
      color: rgba(255, 255, 255, 0.75);
      position: absolute;
    }

      #header.alt nav > ul > li a:not(.button).icon:before {
        color: rgba(255, 255, 255, 0.75);
      }

      #header.alt nav > ul > li.active a:not(.button) {
        background-color: rgba(255, 255, 255, 0.2);
      }

      #header.alt input[type="submit"],
      #header.alt input[type="reset"],
      #header.alt input[type="button"],
      #header.alt .button {
        box-shadow: inset 0 0 0 2px rgba(255, 255, 255, 0.5);
      }

        #header.alt input[type="submit"]:hover,
        #header.alt input[type="reset"]:hover,
        #header.alt input[type="button"]:hover,
        #header.alt .button:hover {
          background-color: rgba(255, 255, 255, 0.1);
        }

        #header.alt input[type="submit"]:active,
        #header.alt input[type="reset"]:active,
        #header.alt input[type="button"]:active,
        #header.alt .button:active {
          background-color: rgba(255, 255, 255, 0.2);
        }

  .dropotron {
    background: #fff;
    border-radius: 6px;
    box-shadow: 0 2px 0 0 rgba(0, 0, 0, 0.065), inset 0 -1px 0 0 #fff, inset 0 0 0 1px rgba(229, 229, 229, 0.5);
    list-style: none;
    margin: calc(-0.5em + 1px) 0 0 1px;
    padding: 0.5em 0;
    width: 11em;
  }

    .dropotron li {
      padding: 0;
    }

      .dropotron li a, .dropotron li span {
        -moz-transition: none;
        -webkit-transition: none;
        -o-transition: none;
        -ms-transition: none;
        transition: none;
        border: 0;
        border-top: solid 1px #f2f2f2;
        color: inherit;
        display: block;
        padding: 0.15em 1em;
      }

      .dropotron li:first-child > a, .dropotron li:first-child > span {
        border-top: 0;
      }

      .dropotron li.active > a, .dropotron li.active > span, .dropotron li:hover > a, .dropotron li:hover > span {
        background: #e89980;
        color: #ffffff;
      }

    .dropotron.level-0 {
      font-size: 0.9em;
      margin: 1em 0 0 0;
    }

      .dropotron.level-0:before {
        -moz-transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        -o-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
        background: #fff;
        border: solid 1px rgba(229, 229, 229, 0.5);
        border-bottom: 0;
        border-right: 0;
        box-shadow: -0.25em -0.125em 0.125em 0 rgba(0, 0, 0, 0.015);
        content: '';
        display: block;
        height: 0.75em;
        position: absolute;
        right: 1.25em;
        top: -0.375em;
        width: 0.75em;
        z-index: 0;
      }
</style>

<header id= "header">
Foodbase
  <nav><?php echo anchor('login', 'Admin Log In')?></nav></header>
</html>

