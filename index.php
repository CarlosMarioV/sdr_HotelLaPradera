<!DOCTYPE html>
<!--Desarrollador: Carlos Villafuerte, Esteban Blanco, Lady Chacon, Roberto Salazar.
    Version: 1.0
    Module AngularJS: HotelLaPredera
    Año: 2016 
-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Hotel la Pradera</title>
        <!--Carga el css de bootstrap..-->
        <link rel="stylesheet" href="lib/Bootstrap/css/bootstrap.min.css"><!--Boostrap..-->
        <link rel="stylesheet" href="style/style.css"><!--CSS personalizado..-->
        <link rel="stylesheet" href="lib/Icons/css/font-awesome.min.css"><!--Iconos..-->
        <link rel="stylesheet" href="lib/pnotify/pnotify.custom.min.css">
        
    </head>
    <body ng-app="HotelLaPradera"> <!-- -->
        <!-- Nav lateral, la imagen le cae encima, asi que no se ve..-->
        <header  >
            <nav class="navbar navbar-inverse" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div style="margin-left: 2px;">
                    <img class="img-rounded" width="255" height="100" alt="logoLaPraderaWeb" src="data:image/png;base64,
                         iVBORw0KGgoAAAANSUhEUgAAASwAAABuCAIAAAAS+LnxAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpV
                         Fh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8
                         +IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTExIDc5LjE1O
                         DMyNSwgMjAxNS8wOS8xMC0wMToxMDoyMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk
                         5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9uc
                         y5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3V
                         yY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6Q
                         0Y2OTg2NzZBMjU0MTFFNjhFRjhBODBDN0YxMUE0RjkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6Q0Y2OTg2NzVBMjU0MTFFNjh
                         FRjhBODBDN0YxMUE0RjkiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIj4gPHhtcE1NOkRlcml2Z
                         WRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RDdENjg4MDg5OUI1MTFFNkE0Q0U5OENCMjg0ODQ2RjMiIHN0UmVmOmRvY3V
                         tZW50SUQ9InhtcC5kaWQ6RDdENjg4MDk5OUI1MTFFNkE0Q0U5OENCMjg0ODQ2RjMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmO
                         lJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6JmSZGAABTJ0lEQVR42uxdB3wURRefLXd7Lb03SCGF0HtvUUF6b4q
                         CCKKo+CEoVlRERbFgQ0UBQaQoKkWk994hQEiAQBohpJfrt+V7s3vZXC6FGgW9+eV32dvbMjv7/u/935s3M4QgCMhVXMVV/rlCuprAV
                         Vzlny30339LlmVXr14NnyRJ2my2yMjILl26JCYmHj9+nGEYOIDjuGHDhqnV6rquSXJy8sGDB+GmUI169er16NHDJRCu8g8U4W8ver3
                         esQLdu3fnef6ll15y3JmdnX2TVzt79ixgGPAD1+nfv7/Var35msyePVu+Y+vWrQVXcZV/ovwDlpAQi+yLenp6wleNRlOJJZM3y5MLC
                         gr27t0rXxnwfPM1cbypl5eXSyO7yn+Fjt7dolKpHKFLUVRd39FUnGsuyld7+xO0Em4H9yQIEv54gnCkF/CPt5iLMi7kp5415GfY9MU
                         8SWrcvFXewZ5h0T5RjRmtu0v+XOXeBaFjzNZkMmVkZLi7uxuNRn9/f51OR4jiDsyzuLgYfnI8MS0tDQ5wc3PTarWyC5qZmalQKCwWi
                         1KpDAgIgM87qZs+J2tev1Y6L0SrEU0jCqCoZCiKJiloTKiYgHiB421gk836spIcZDU7X4FSIq9AFBTTon6zh8Lb9/KPaab08HHJogu
                         E92IpLS195513vv32W8ChBEvA0hNPPPHmm2+GhoaeOHGiU6dOjnDlOC42NhY2Fi5cOG7cOIDfokWL5syZA8iUDgNTWb9+/ffff3/Ys
                         GE0Td9e94xfXMvWQx4+sHwT4FDgQV9YkWCtSoKBTxMkohmkqC7ApC9ASbtPntl2kqQ+cvdFQXHxUe0GxXQfBBaSYtQuuXSB8J8vDMO
                         AoQsPDy8qKnLcb7PZFixY8MMPP+Tl5VXrAUp74Fz4fO211+bOnev065UrV0aPHp2UlDRr1qzb5q59Xvvp8hE/sHKK28ULGEOq3B5bj
                         OjCgaTzu5MUn73vUx9Fth3U5OEnQlt1V7j46n+j3KP9hGCytmzZIiMQrNbs2bMjIiJkLMHXkJAQsHKPPvqo41lvvPEG/JSQkJCfn++
                         IwIkTJ44fP17++u677wK5dYoG3YKO8PQd9elOMHQCdzcelkYqHdJ6IaUGFWWjgyvXLBg38Iu+Hls/mFR45bxLRl0grPMCDBM+nfw0s
                         HhnzpyRvw4fPvz1119/9dVX5T27d+8ODg6eMWPGlClTnEAIRzZo0KCwsFDeDzZz3rx5n3zyieMtDAbDzcdgq5aQlt37znjPYrrLbwP
                         oq8YD/5Xloe3fLfiiX/yKSZ3TD27mec4lrC4Q1lVJSUlJTEw8cOBATYEZyRLKn47QkuDqyDaJ8hCl0xWIitBljXtutfjWjxf4umoWI
                         KtgG8FIntm+/9sxDy8cEZGycQXH2Vwi6wLh3S+AwGbNmm3YsKGWYyREOeKqJgjVFGupixTZ5B3L67pxgPGq3ZDGHaUnZi5+5pHvh4Z
                         c3PKLUHfQdxWXT1hXokwQYEXvhHxWg2qeyzq3g7rdzg6WRZwV8exNe6FabBizkvIWPjVyyWMNs08dcMmuC4R3rbRu3To5OXngwIF1d
                         wspu+3o0aN38Zqc1WIoKsAbHIaT1YzAPzTrkakUGYrwNqqV7Wo9kZsvYjTIVIaMJYg1A5m+WShePHxh/ohOf7452lpS4JLgf0H557s
                         oIiIiYmNj27Ztu3bt2roDYatWre62z8b4hjXMzziv0SFGB6SRUbkFMdpAtYevZ0Do9csnk3cdppjq0GtB3vXQ+KWZjJsnbzFfSzqWs
                         u3n1MO/5aSaAMlKFY7NELXqRpUO90/u+2nlxb0rB89aH961n0uOXSC8oyJFVqSevb+zOEZxbstbo0Z8dcBUUqDUuSmVGpJRiRkz9pJ
                         2YFPi5t7q6kAo+aZaL39CoURqXXjHh+GPYxcWX046v/nnczuWXT2fA2gEI0kztfmKYBILr6MF4/snTHw6YfoXJKX4d0vqwX37TIV5X
                         Xr3k8LpLhDefz7hxx9/HBoaKneEAAI9PDzMZvOdXBZMGfxVz/IpqiZrBsAH+srZLLSiwqGkaKVPTPPOMc07PTsnP/Xc2bXfJ27+Lue
                         yDQ5WaWs0jGA2BSXaMv/bnAtHh326WfXvzX2bOXPmiCXvdghC7/469JVFK/5lOPyvgHDy5MkAvGeeeUYKzwBBffDBB536PO4mWVUoa
                         7KyAok4FmfY0TUYWL/opj2mf9l1ykdph7cf/XlO8t79JhOYTFRteg/g080bnd1+vHRM3NhFp7V+wf++1zdr1qz6X77buDmOYLx69Lf
                         f/1gzYsRwFwjvsyKN2gLGu3TpUnnn3Llz627IBa1gAOzguVU1YrADQMhz7I18TnVUl37wV3jl/KHFs46vXWkswd0V1VpFrTfKSspf9
                         FjU+BWXtV5B9++bSklJ+fnzT0Pq13/q5VclZ+G1115r/t0HI5qLgSsO0UHI/NPH6N8Fwn9VFwW8tpr6Iar2E955Z32tEFLWElzB2S/
                         CzfZOeEc07DNrxfMbLrUd1t9mRLZq464CUnug7Avm5RPbsWbjffr6duzYseTBxrNOLRi7+PXDhw/DnnfeeafzDx+MaCYiULA/6eO5R
                         xIPH3KB8G8KnFTUUoSWY2qb/KsjlmBnQUH1UXtgnk52r05nuCJroaMEBiHH3VqHu2do1OCP1k1cvsMvXGUsrva6ONnt4tHMTe89fj8
                         K4saNGy889sD7USxSIZU3Wr982ex3Zw344e0+jbEBRPK7gmbTIs8f3nSBsM4LeN7+/v7y1127dl29enXbtm3yHp1OJ234+Pg44qphw
                         4bPPvvs0aNH5QOk/SdOnNi3b5/TLeoOh4SiRktIipZQsN1OAlq9Nj0mrc5p3quzvqT6A3SeaP/Pv6Xv23B/SeHKlSvzJvR5OkYEG1A
                         EJXpmw9dvrHyrRbT41ektcahe8rb9a391gfBuOmzV7u/fv7+8nZGRERoaumTJEnnP008/LdlAPz8/x7OKi4vnz58PajUoKCgyMlLe3
                         6FDhz59+shfW7du7RQdvbuApCi6RrZL4P59gb3NLFClzmPYlztaPNzFVFZ9nIai0eZPH+fY+ybL9IMPPlA8P/rxWNHi8XZzF1oPIX8
                         RgdXZfKRAzT8bnZeX5wLh3UGd0Yh9GKfeAvgaGBi4adOmqsFowN7UqVNHjBghffXy8gLPwcnBk6ZyO3jwYLV99O3bt9+6dSucUlpaK
                         u80GAx3s1lpmqgl6IPp6O2DhKIVgz9c61cPd3VULYwWpZ0uzDi89d4XvqKiovGPjurz7WtDm4IcoB0GBru7hL2JkDxuhK1wCFMkl5g
                         DTsptfevFf0ks4++f/JfjOGCGUl85oAVMVqNGjdLS0i5evChBDn7q1KmTNP0hWLYzZ87k5uZmZ2cDwwwJCYmNjQ0LC3MMwMAjlJSUg
                         LWUhi/ZbLaYmJj69esjMQcgJSUlPT0dfoVT6tWrJ/0k3SgrK+v8+fOwDVUC9tukSZO79YzG/OzPeoUA0KqBIg+1QlPWnfKLbnYntzj
                         w7SvrP/oQ/MBq7l6KOg7v33/OuntZ8hITExc8MfQr9hLyQUdKqZGmhlfcziIGcWb0orn+5+7p+CDQVAwqMiFQlvXF8dNr9Fo/wtpJa
                         8PmowBten/9w/36uUDoKtXBoDB7Xq8Qq6X6zj2bCT33+2H/+LZ3covLu9f+MH6QurrB91YzCmpAT/7DiOh7tFN7w7p15LSBvcXOlJd
                         LQuZaAxaq08a7FwLqOhXHHeBVgscpRKHTVrKZhi8wofGm6LVeF7ENtKGA4qZHtIn1NUAJ0G8lbj22pnl7e7voqKtUw0fBVBM16DceG
                         8M7HQ6cdyWxJv1J06gsnzXpi+/Nttn1xUd93xzYOxh9a/CLym/8mc23GWkery4EkvlYWeQZQelP2EPHO1hf+AS4rWN1iSaRp9LoJSY
                         3XN88x4TZ6VCmbMFr010+oatU57YhilDU4hUj/s4y5qBcObSerMHtFAgETJjl7rnB+GaDIemlcb6fzXhX8K+X3+R/pmAlgYdzfaa+C
                         L+OKon8ldWFESwtCqaFRcusvrgLFDuK/HhjHGanBJrO5DCE0EzfNA+8eDWasmPx77//7gKhq1RFYW2jFwGE7J1NjGE1lmWnHFUoa/I
                         xEK1CDK28p5okNTW1T/fuw+b91JqP/JwL0iIuirCZETmEMrQibYNLG/zF6mIIHNX1IVgA2zxr4AmeKTVjlRaChLOC4jlDPRw+ZdBLi
                         rxcRLTQNy4pQ5owVPzKcKeZL10gvMU4jcV08Lu3Ti7/tCT7yr8GgwRBkQSqcQQ8gPDOLOH+b1/Lz0A1DSnmOTwYn9Zo7yEncMOG5s2
                         b7zl1yhAVG+OhDUA2WfL8CdtoU/QBThNOsGK3PBlJ2S5Z0bdWXy+Cm2cJAkAGELYIgv3a5vWDAU+U/q462x8OJFATQ2OLAY33479+a
                         ozNZnOB8DZLSUbKb7NmLZ8x7bOHI9e9Oih540+/PNN51TNdrSX597Fuw5OB12wJcQj39ntEDv8wa9s3X6l090dTcBw3a9Ysqdc3vmF
                         DdwXFOfBkDeK3cW4XeMZXRKDdzgvoNXMD2Agg2GWsj96GoikL2Mx4wjbRXG+tXgvGcK4q8yrCTRxX1hg+P7y+d+7bM+9TafnnE7gpj
                         Zu7j33q6kO/rj24ai1B4sHm9Zp80mHyB/cvCmsbmCsgq/V2LGFx+oUtHz51ctNuta62gb9ggRlNAFGXodGya2mXdm70bRAd2uaBWrJ
                         wgYI+9dRTO3fuDA4O9vPzYVlWTDcUZwwqr79C7BDEiUTiZZSIS0OkBZEaGlu2qwJaxHsHKcxWgtGSfBxiB7H115kuPa4u+hN5bEMqN
                         WDbFJPkfuG13+b80qjRiEfGuEB46yBk1OC8WK04mq92q/Ca8rLO3cd0FAwhXVv3D2e6BZ9QsFmvnTty+Oc5ZzZvMBtQtX2DjgX8Kv/
                         otgRRVzSn8Mr5BaPi8zLx2Mgpv22q175XtYctW7YMEGi1WRs0jlAzKpYz8478uTJyeRxKFuRflAQr/R6E2GXI053gdZQVGD6JhDiSH
                         cBHLheuLFGntRIibQIqQkQHa8TB4CuD5z52uF54u86dXSC8RRDSCmBuVaP5tIK5n31CglJQNaRdiTi54VgHQTCV5F9POn5p56qUgyu
                         uXbAAiVNrkfomZuUG7DfuObaOHs1QlLN6WrfSArychr4A5aeergrCrKysGTNmrFix3D1YGxEeATXiOBMSM/l4QqbkACkBB1pIBzyKn
                         RMEjsVgBQYngDUvRrizniR4wd62KE5gH0Eh84hr7whXXibCvAj+uEAO4APWeV9v+1qXpK9Pxzdp6gLhrdSApHGAwehM2BSyWbwPiyC
                         aQr6G8UriChZ8ZdjwnNViLisqzbycl56YdXzP9QsHr1/JKCtEHI9UDE5Gu8liM6HQeGV4p7518Vw7P3lu//KvWTPmLIASpQ4dX/N9Y
                         JNOwU07yccsXrz4+eefN1lNEa383dw1Vs5KCYI8hJmqom55gq+svxwtJcaowuEAHl8BbzRGlheR5xOCqQVRlkjQcQitR/SzgvZrhSF
                         +Wsf0b07Xj4pygfDmTSFFKaoJJCo09/GCgUAFKRq8leodP1qFrp7ednFLbHHWlcJrqcaCtOKsy0X5acZiPFkbx4p52EqkUKBbVUTQj
                         DYr6v3SL5RSddcfiue5lD2LoZKyNQaykrTvUsvEPUFNOoLxP3ny5Msvv7x9+3a3KCo2KoBGhI0129eqIjhKqKDHXDmuaNHosWASSXv
                         2tlARMRQIONMBtDaCh4vY8Ln40BgCbUGkFnEK3C2KYgnLfEIZwBpmmg2hU7tmzT8cGhrqAuHNyStFgzeINVzl/YzmPraEBElQFFNTx
                         oxKg+fVPrZ+v3gk1v2kAtEUbgLVnT00WM6HJj8Z2a2u5o+klW60wuhIWNQapPP0ycm5/sUXn3/00UfIQwjvodO6qQTWZIW3Stuppo0
                         oz8EmyiEm0XL7HtYem0E0R7AKOyJJUZ2BUiIlSaUxevEFZanVEZyDEBPxBP+W0subLnpOn108oRu1eF9QUJALhDcTRyRB61eVV+V9D
                         UIwhQolX7PPRjO1TaZ2OwSYxwjsMmbIQzMW1NWbAvOuUjsthAXmOvva9QEJvS9eOh3cgfQJ0tl4XuCNnBK8P5K22z3s2jHiK7YQBF1
                         OO6EdysmnsvwWcHXaRggKgRZEmYDDleXrSRPlUsJTFYZURCYlf22D0PMqX0aZPzH/8oIRD/T/Zfu9j8N/HoQCXl6XrhrDYHT3MQjF7
                         noV+numqyfw3MFWM+o5ecKDr3xXd0FRDAiFqso+ZDGZlJGmuHhao9ZwNoIRc4Xs3SMiWspRB1Dhys+neAJoZMXaxpw9M5QQ/UbwHHm
                         hHFpEZQ0NkFM40CaOwKa0vDcG729NoKeYIEF97alL58f36vHuxu0hISEuEN7AfSJpDS+UOgmWSu1xP4MQR33/DhXG4z5Vr2A0+u2Vc
                         T1H1rm4KDRO3S7YquuYwEZu+dfwpMW0SnAQLZaonEFL2g0fRiNHMHAEjo9K3YP4J/AbKclywp8kmpQA24QcsBG/2jkthrog4ZCQZIa
                         2f0VdkDBJF2punDvzcMrIrl1/2rZNXlfPBcJq3SewhEonOop7ijS6+xqEoFrqdJQYwM+kx2yw4+jhD738ldrL/+94KFrlNNkEyD/uj
                         xEEWkErSaW970H09EgHeyVgAy2Uv1scCZC7DMvtHRxPSo4g7rHCAmEnrgpMYssdQgFJttRixx2Byn1F2lGmCZSAhFmKwJJuZRO2Xe7
                         TqdPqrVsbNWrkAmHN7hOprEpyaLXm/gYhVVf50zyLjAbcb9GqV0L3F+b6xrb8e54oNzdP5+UtVHlT2K2nkUrBUBRZmTcSUrCTLseeI
                         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"/>
                </div>
                <div style=" margin-top: 10px; font-size: 20px;background-color: #3F3D3D; color: gainsboro">Menu Principal</div>
                <!-- Collect the nav links, forms, and other content for toggling --> 
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#superUsuario"><i class="fa fa-user"></i> Mi Perfil</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-plus-circle"></i> Reservaciones</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-header" style="font-family: cursive">Menu Reservaciones</li>
                                <li><a href="#agendaReservas">Filtrar Reservas</a></li>
                                <li><a href="#reservar">Reservar</a></li>
                                <li><a href="#">Modificar</a></li>
                                <li><a href="#">Eliminar</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bed"></i> Habitaciones</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-header" style="font-family: cursive">Menu Habitaciones</li>
                                <li><a href="#">Ver Habitaciones</a></li>
                                <li><a href="#aHabitacion">Nueva Habitación</a></li>
                                <li><a href="#">Modificar</a></li>
                                <li><a href="#">Eliminar</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-money"></i> Facturacion</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Ver Habitaciones</a></li>
                                <li><a href="#superUsuario/reservaciones">Agregar</a></li>
                                <li><a href="#">Modificar</a></li>
                                <li><a href="#">Eliminar</a></li>
                            </ul>
                        </li>
                         <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> Clientes</a>
                            <ul class="dropdown-menu">
                                <li><a href="#verClientes">Ver Clientes</a></li>
                                <li><a href="#agregarCliente">Agregar</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-times"></i> Salir</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </header>
        <!--Carga los templates -->
    	<div>
            <div ng-view=""></div>
        </div>
        
        <!-- Carga libreria jQuery.--> 
        <script src="lib/jQuery/dist/jquery.min.js"></script>
        <!-- Carga libreria Bootstrap.-->
        <script src="lib/Bootstrap/js/bootstrap.min.js"></script>
        
        <!-- Carga libreria AngularJS.-->
        <script type="text/javascript" src="lib/AngularJS/angular.min.js" ></script>
        <script type="text/javascript" src="lib/AngularJS/angular-route.min.js"></script> 
        <script type="text/javascript" src="lib/ngStorage/ngStorage.min.js"></script>
        <script type="text/javascript" src="lib/pnotify/pnotify.custom.min.js"></script>
        <script type="text/javascript" src="lib/pnotify/angular-pnotify.js"></script>
        
        
        <!--Carga las rutas (templates)-->
        <script src="app.js"></script> 
        
        <!--Carga de jQuery events-->
        <script type="text/javascript" src="lib/jQuery/dist/jquery.min.js"></script>
        
        <!--Carga de service-->
        <script type="text/javascript" src="appWEB/login/service/login.js"></script>
        <script type="text/javascript" src="appWEB/profile/service/superUsuario.js"></script>
        <script type="text/javascript" src="appWEB/reservaciones/reservar/servicio/reservas.js"></script>
        <script type="text/javascript" src="appWEB/reservaciones/agendaReservas/servicio/agendaReservas.js"></script>
        <script type="text/javascript" src="appWEB/habitaciones/servicio/aHabitacion.js"></script>
        <script type="text/javascript" src="appWEB/User/servicio/usuario.js"></script>
        <script type="text/javascript" src="appWEB/clientes/service/clientes.js"></script>
        <!-- La autentificacion y demas -->
        <script type="text/javascript" src="appWEB/login/service/AuthenticationService.js"></script>
        <script type="text/javascript" src="appWEB/comun/notificaciones.js"></script>
        
        <!-- Carga de controladores.-->
        <script type="text/javascript" src="appWEB/login/controlador/login.js"></script>
        <script type="text/javascript" src="appWEB/profile/controlador/superUsuario.js"></script>
        <script type="text/javascript" src="appWEB/reservaciones/reservar/controlador/reservar.js"></script>
        <script type="text/javascript" src="appWEB/reservaciones/agendaReservas/controlador/agendaReservas.js"></script>
        <script type="text/javascript" src="appWEB/habitaciones/controlador/aHabitacion.js"></script>
        <script type="text/javascript" src="appWEB/User/controlador/usuario.js"></script>
        <script type="text/javascript" src="appWEB/clientes/controlador/clientes.js"></script>
    </body>
</html>