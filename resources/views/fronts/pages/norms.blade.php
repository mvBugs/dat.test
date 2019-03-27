@extends('fronts.layouts.app', ['title' => $node->name])

@section('content')
    @include('fronts.layouts.inc.header')
        <div class="about about_norms">
            <div class="about__wrapper">
                <h1 class="about__name big-name">{{ $node->name }}</h1>
            </div>
        </div>
        <div class="norms">
            <div class="norms__wrapper">

        <div class="norms__left my-animate fadeInLeft" data-duration="2" data-delay="1">
        <div class="norms__table">
        {!! \BlockVisualEditor::render('norms__right-left', '
            <table>
                <span class="table__name">Нормы загрузки</span>
                <tr>
                    <th rowspan="3">Номер <br> барабана</th>
                    <th rowspan="3">Масса, <br> кг </th>
                    <th rowspan="3"> Кол-во комплектов* в <br> фуре (горизонтально)</th>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td>8</td>
                    <td>34</td>
                    <td>500</td>
                </tr>
                <tr>
                    <td>8 а</td>
                    <td>36.5</td>
                    <td>500</td>
                </tr>
                <tr>
                    <td>8 б</td>
                    <td>38</td>
                    <td>500</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>39</td>
                    <td>200</td>
                </tr>
                <tr>
                    <td>10 а</td>
                    <td>55</td>
                    <td>200</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>99</td>
                    <td>200</td>
                </tr>
                <tr>
                    <td>12 а</td>
                    <td>107</td>
                    <td>200</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>165</td>
                    <td>120</td>
                </tr>
                <tr>
                    <td>14 а</td>
                    <td>152</td>
                    <td>120</td>
                </tr>
                <tr>
                    <td>14 б</td>
                    <td>171</td>
                    <td>120</td>
                </tr>
                <tr>
                    <td>14 г</td>
                    <td>176</td>
                    <td>120</td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>241</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>16 а</td>
                    <td>237</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>277</td>
                    <td>70</td>
                </tr>
                <tr>
                    <td>17 а</td>
                    <td>295</td>
                    <td>70</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>422</td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>18 а</td>
                    <td>422</td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>584</td>
                    <td>40</td>
                </tr>
                <tr>
                    <td>20 а</td>
                    <td>555</td>
                    <td>40</td>
                </tr>
                <tr>
                    <td>20 б</td>
                    <td>631</td>
                    <td>40</td>
                </tr>
                <tr>
                    <td>22</td>
                    <td>759</td>
                    <td>30</td>
                </tr>
            </table>') !!}
        </div>
            <div class="norms__tablet-button">
            {!! \BlockVisualEditor::render('norms__button', '
            <a href="#">
                <svg class="icon-svg icon-svg-download "><use xlink:href="/its-client/img/sprite.svg#download"></use></svg>
                <span class="line"></span>
                <span>Нормы загрузки</span>
            </a>
            <a href="#">
                <svg class="icon-svg icon-svg-download "><use xlink:href="/its-client/img/sprite.svg#download"></use></svg>
                <span class="line"></span>
                <span>Нормы намотки кабеля</span>
            </a>
             ')   !!}
        </div>
        <div class="norms__left-bottom">
            <div class="norms__left-text">
                * - Данные в таблице приведены справочно и могут варьироваться в зависимости от размера полуприцепов. В силу особенностей погрузки может быть перегруз или недогруз до 10% .
            </div>
            <div class="norms__left-img">
                <img src="/its-client/img/norms-img.png" alt="">
            </div>
        </div>
    </div>


                <div class="norms__right my-animate fadeInRight" data-duration="2" data-delay="1">
                <div class="norms__table">
                {!! \BlockVisualEditor::render('norms__right-right', '
                    <table>
                        <span class="table__name">Нормы намотки кабеля</span>
                        <tr>
                            <th rowspan="2">Диаметр кабеля, мм</th>
                            <th colspan="12">Расчетная длина на барабанах, в метрах, не менее</th>
                        </tr>
                        <tr class="inner-head">
                            <th>8</th>
                            <th>8а</th>
                            <th>8б</th>
                            <th>10 </th>
                            <th>12</th>
                            <th>12а</th>
                            <th>14</th>
                            <th>16a</th>
                            <th>17</th>
                            <th>18</th>
                            <th>20</th>
                            <th>22</th>

                        </tr>
                        <tr>
                            <td>7</td>
                            <td>900</td>
                            <td>1550</td>
                            <td>1950 </td>
                            <td>3650</td>
                            <td>6100</td>
                            <td>8700</td>
                            <td>11950</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>650</td>
                            <td>1200</td>
                            <td>1500</td>
                            <td>2800</td>
                            <td>4650</td>
                            <td>6650</td>
                            <td>9150</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>500</td>
                            <td>950</td>
                            <td>1150</td>
                            <td>2200</td>
                            <td>3700</td>
                            <td>5250</td>
                            <td>7200</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>400</td>
                            <td>750</td>
                            <td>950</td>
                            <td>1800</td>
                            <td>3000</td>
                            <td>4250</td>
                            <td>5850</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>350</td>
                            <td>600</td>
                            <td>750</td>
                            <td>1450</td>
                            <td>2450</td>
                            <td>3500 </td>
                            <td>4800 </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>300</td>
                            <td>500</td>
                            <td>650</td>
                            <td>1250</td>
                            <td>2050</td>
                            <td>2950</td>
                            <td>4050</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>250</td>
                            <td>450</td>
                            <td>550</td>
                            <td>1050</td>
                            <td>1750</td>
                            <td>2500</td>
                            <td>3450</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>200</td>
                            <td>350</td>
                            <td>450</td>
                            <td>900</td>
                            <td>1500</td>
                            <td>2150</td>
                            <td>2950</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>150</td>
                            <td>300</td>
                            <td>400</td>
                            <td>800</td>
                            <td>1300</td>
                            <td>1850</td>
                            <td>2600</td>
                            <td>4200</td>
                            <td>4300</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>150</td>
                            <td>300</td>
                            <td>350</td>
                            <td>700</td>
                            <td>1150</td>
                            <td>1650</td>
                            <td>2250</td>
                            <td>3700</td>
                            <td>3800</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>150</td>
                            <td>250</td>
                            <td>300</td>
                            <td>600</td>
                            <td>1000</td>
                            <td>1450</td>
                            <td>2000 </td>
                            <td>3300</td>
                            <td>3350</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>100</td>
                            <td>200</td>
                            <td>250</td>
                            <td>550</td>
                            <td>900</td>
                            <td>1300</td>
                            <td>1800</td>
                            <td>2900</td>
                            <td>3000</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>100</td>
                            <td>200</td>
                            <td>250</td>
                            <td>500</td>
                            <td>800</td>
                            <td>1150</td>
                            <td>1600</td>
                            <td>2600 </td>
                            <td>2700</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>100</td>
                            <td>150</td>
                            <td>200</td>
                            <td>450</td>
                            <td>750</td>
                            <td>1050</td>
                            <td>1450</td>
                            <td>2350</td>
                            <td>2400</td>
                            <td>2700</td>
                            <td>4400</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>100</td>
                            <td>150</td>
                            <td>200</td>
                            <td>400</td>
                            <td>650</td>
                            <td>950</td>
                            <td>1300</td>
                            <td>2150</td>
                            <td>2200</td>
                            <td>2450</td>
                            <td>3950</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td>50</td>
                            <td>150</td>
                            <td>150</td>
                            <td>350</td>
                            <td>600</td>
                            <td>850</td>
                            <td>1200</td>
                            <td>1950</td>
                            <td>2000</td>
                            <td>2200</td>
                            <td>3600</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>23</td>
                            <td>50</td>
                            <td>100</td>
                            <td>150</td>
                            <td>300</td>
                            <td>550</td>
                            <td>800</td>
                            <td>1100 </td>
                            <td>1800</td>
                            <td>1800</td>
                            <td>2050</td>
                            <td>3300</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>24</td>
                            <td>50</td>
                            <td>100</td>
                            <td>150</td>
                            <td>300</td>
                            <td>500 </td>
                            <td>700</td>
                            <td>1000</td>
                            <td>1650</td>
                            <td>1650</td>
                            <td>1850 </td>
                            <td>3050 </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>50</td>
                            <td>100</td>
                            <td>150</td>
                            <td>250</td>
                            <td>450</td>
                            <td>650</td>
                            <td>900</td>
                            <td>1500 </td>
                            <td>1550 </td>
                            <td>1700</td>
                            <td>2800</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>26</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>250</td>
                            <td>400</td>
                            <td>600</td>
                            <td>850</td>
                            <td>1400</td>
                            <td>1400</td>
                            <td>1600</td>
                            <td>2600</td>
                            <td>2950</td>
                        </tr>
                        <tr>
                            <td>27</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>200</td>
                            <td>400</td>
                            <td>550</td>
                            <td>800</td>
                            <td>1300</td>
                            <td>1300</td>
                            <td>1450</td>
                            <td>2400</td>
                            <td>2700</td>
                        </tr>
                        <tr>
                            <td>28</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td>200</td>
                            <td>350</td>
                            <td>500</td>
                            <td>700</td>
                            <td>1200</td>
                            <td>1200</td>
                            <td>1350</td>
                            <td>2200</td>
                            <td>2500</td>
                        </tr>
                        <tr>
                            <td>29</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td>200</td>
                            <td>350</td>
                            <td>500</td>
                            <td>650</td>
                            <td>1100</td>
                            <td>1150</td>
                            <td>1250</td>
                            <td>2050</td>
                            <td>2350</td>
                        </tr>
                        <tr>
                            <td>30</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td>200</td>
                            <td>300</td>
                            <td>450</td>
                            <td>650</td>
                            <td>1050</td>
                            <td>1050</td>
                            <td>1200 </td>
                            <td>1950</td>
                            <td>2200</td>
                        </tr>
                        <tr>
                            <td>31</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td>150</td>
                            <td>300</td>
                            <td>400</td>
                            <td>600</td>
                            <td>950 </td>
                            <td>1000</td>
                            <td>1100</td>
                            <td>1800</td>
                            <td>2050</td>
                        </tr>
                        <tr>
                            <td>32</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td>150</td>
                            <td>250</td>
                            <td>400</td>
                            <td>550</td>
                            <td>900</td>
                            <td>950</td>
                            <td>1050</td>
                            <td>1700</td>
                            <td>1950</td>
                        </tr>
                        <tr>
                            <td>33</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td>150</td>
                            <td>250</td>
                            <td>350</td>
                            <td>500</td>
                            <td>850</td>
                            <td>850</td>
                            <td>950</td>
                            <td>1600</td>
                            <td>1800</td>
                        </tr>
                        <tr>
                            <td>34</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td>150</td>
                            <td>250</td>
                            <td>350</td>
                            <td>500</td>
                            <td>800</td>
                            <td>800</td>
                            <td>900</td>
                            <td>1500</td>
                            <td>1700</td>
                        </tr>
                        <tr>
                            <td>35</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td>100</td>
                            <td>200</td>
                            <td>300</td>
                            <td>450</td>
                            <td>750</td>
                            <td>750</td>
                            <td>850</td>
                            <td>1400</td>
                            <td>1600</td>
                        </tr>
                        <tr>
                            <td>36</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td>100</td>
                            <td>200</td>
                            <td>300</td>
                            <td>450</td>
                            <td>700</td>
                            <td>750</td>
                            <td>800</td>
                            <td>1350</td>
                            <td>1500</td>
                        </tr>
                        <tr>
                            <td>37</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td>100</td>
                            <td>200</td>
                            <td>300</td>
                            <td>400</td>
                            <td>650</td>
                            <td>700</td>
                            <td>750 </td>
                            <td>1250</td>
                            <td>1450</td>
                        </tr>
                        <tr>
                            <td>38</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td>100</td>
                            <td>200</td>
                            <td>250</td>
                            <td>400</td>
                            <td>650</td>
                            <td>650</td>
                            <td>750</td>
                            <td>1200</td>
                            <td>1350</td>
                        </tr>
                        <tr>
                            <td>39</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td>100</td>
                            <td>150</td>
                            <td>250</td>
                            <td>350</td>
                            <td>600</td>
                            <td>600</td>
                            <td>700</td>
                            <td>1150</td>
                            <td>1300</td>
                        </tr>
                        <tr>
                            <td>40</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>350</td>
                            <td>550</td>
                            <td>600</td>
                            <td>650</td>
                            <td>1100</td>
                            <td>1200</td>
                        </tr>
                        <tr>
                            <td>41</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>300</td>
                            <td>550</td>
                            <td>550</td>
                            <td>600</td>
                            <td>1000</td>
                            <td>1150</td>
                        </tr>
                        <tr>
                            <td>42</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>300</td>
                            <td>500</td>
                            <td>550</td>
                            <td>600</td>
                            <td>950</td>
                            <td>1100</td>
                        </tr>
                        <tr>
                            <td>43</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>300</td>
                            <td>500</td>
                            <td>500</td>
                            <td>550</td>
                            <td>950</td>
                            <td>1050</td>
                        </tr>
                        <tr>
                            <td>44</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>300</td>
                            <td>450</td>
                            <td>500</td>
                            <td>550</td>
                            <td>900</td>
                            <td>1000</td>
                        </tr>
                        <tr>
                            <td>45</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>250</td>
                            <td>450</td>
                            <td>450 </td>
                            <td>500</td>
                            <td>850</td>
                            <td>950</td>
                        </tr>
                        <tr>
                            <td>46</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>250</td>
                            <td>450</td>
                            <td>450 </td>
                            <td>500</td>
                            <td>800</td>
                            <td>900</td>
                        </tr>
                        <tr>
                            <td>47</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>250</td>
                            <td>400</td>
                            <td>400</td>
                            <td>450</td>
                            <td>750</td>
                            <td>900</td>
                        </tr>
                        <tr>
                            <td>48</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>250</td>
                            <td>400</td>
                            <td>400</td>
                            <td>450</td>
                            <td>750</td>
                            <td>850</td>
                        </tr>
                        <tr>
                            <td>49</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>200</td>
                            <td>350</td>
                            <td>400</td>
                            <td>450</td>
                            <td>700</td>
                            <td>800</td>
                        </tr>
                        <tr>
                            <td>50</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>200</td>
                            <td>350</td>
                            <td>350</td>
                            <td>400</td>
                            <td>700</td>
                            <td>750</td>
                        </tr>
                        <tr>
                            <td>51</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>200</td>
                            <td>350</td>
                            <td>350</td>
                            <td>400</td>
                            <td>650</td>
                            <td>750</td>
                        </tr>
                        <tr>
                            <td>52</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>200</td>
                            <td>350</td>
                            <td>350</td>
                            <td>400</td>
                            <td>650</td>
                            <td>700</td>
                        </tr>
                        <tr>
                            <td>53</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>200</td>
                            <td>300</td>
                            <td>300</td>
                            <td>350</td>
                            <td>600</td>
                            <td>700</td>
                        </tr>
                        <tr>
                            <td>54</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>200</td>
                            <td>300</td>
                            <td>300</td>
                            <td>350</td>
                            <td>600</td>
                            <td>650</td>
                        </tr>
                        <tr>
                            <td>55</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>150</td>
                            <td>300</td>
                            <td>300</td>
                            <td>350</td>
                            <td>550</td>
                            <td>650</td>
                        </tr>
                        <tr>
                            <td>56</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>150</td>
                            <td>300</td>
                            <td>300</td>
                            <td>300</td>
                            <td>550</td>
                            <td>600</td>
                        </tr>
                        <tr>
                            <td>57</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>150</td>
                            <td>250</td>
                            <td>300</td>
                            <td>300</td>
                            <td>500</td>
                            <td>600</td>
                        </tr>
                        <tr>
                            <td>58</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>150</td>
                            <td>250</td>
                            <td>250</td>
                            <td>300</td>
                            <td>500</td>
                            <td>550</td>
                        </tr>
                        <tr>
                            <td>59</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>150</td>
                            <td>250</td>
                            <td>250</td>
                            <td>300</td>
                            <td>500</td>
                            <td>550</td>
                        </tr>
                        <tr>
                            <td>60</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>150</td>
                            <td>250</td>
                            <td>250</td>
                            <td>300</td>
                            <td>450</td>
                            <td>550</td>
                        </tr>
                        <tr>
                            <td>61</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>150</td>
                            <td>250</td>
                            <td>250</td>
                            <td>250</td>
                            <td>450</td>
                            <td>500</td>
                        </tr>
                        <tr>
                            <td>62</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>150</td>
                            <td>200</td>
                            <td>250</td>
                            <td>250</td>
                            <td>450</td>
                            <td>500</td>
                        </tr>
                        <tr>
                            <td>63</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>100</td>
                            <td>200</td>
                            <td>200</td>
                            <td>250</td>
                            <td>400</td>
                            <td>500</td>
                        </tr>
                        <tr>
                            <td>64</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>100</td>
                            <td>200</td>
                            <td>200</td>
                            <td>250</td>
                            <td>400</td>
                            <td>450</td>
                        </tr>
                        <tr>
                            <td>65</td>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>100</td>
                            <td>200</td>
                            <td>200</td>
                            <td>250</td>
                            <td>400</td>
                            <td>450</td>
                        </tr>
                    </table>') !!}
                </div>
            </div>

            </div>
        </div>
    @include('fronts.layouts.inc.footer-inner')
    @include('fronts.layouts.inc.modal')
@endsection
