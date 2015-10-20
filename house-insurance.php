<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from martaniandemo.com/html/insurance/house-insurance.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Oct 2015 06:03:18 GMT -->
<head>
    
    <title>Insurance - HTML5 Template for Insurance Agency</title>
    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Signika:300,400,600,700" />
    <link rel="stylesheet" type="text/css" href="_assets/_libs/font-awesome/css/font-awesome.css" /> 
    <link rel="stylesheet" type="text/css" href="_assets/_libs/no-ui-slider/jquery.nouislider.css" />
    <link rel="stylesheet" type="text/css" href="_assets/_libs/animate.css" /> 
    <link rel="stylesheet" type="text/css" href="_assets/_css/style.css" />  

</head>
<body>

    <div id="loader">

        <div class="loader-spinner">
        </div>
    
    </div>

    <div id="contact-popup">
    
        <div id="contact-popup-background">
        </div>
    
        <div id="contact-popup-content" class="animated speed">

            <div id="contact-popup-close"><i class="fa fa-times"></i></div>

            <div id="google-map" data-lat="37.42565" data-lng="-122.13535" data-zoom-level="12">
            </div>
            
            <div class="padding">

                <i class="fa fa-envelope-o background-icon"></i>
                
                <h3>Contact us</h3>
                <h3 class="right">(+123) 456 789 000</h3>
                
                <h2>Send us an <span>email!</span></h2>
                <form method="post" class="form">
                
                    <h4>Contact details:</h4>
                    <input type="text" name="Name" placeholder="Your name..." class="contact-form-element contact-form-client-name" />
                    <input type="text" name="Phone number" placeholder="Your phone number..." class="contact-form-element last" />
                    <input type="text" name="E-mail" placeholder="Your e-mail..." class="contact-form-element contact-form-client-email" />
                    <input type="text" name="Title" placeholder="E-mail title..." class="contact-form-element contact-form-client-message-title last" />
                    
                    <h4>Message:</h4>
                    <textarea name="Message" rows="5" cols="5" placeholder="Your message..." class="contact-form-element"></textarea>
                    <button class="button button-navy-blue send-contact" type="button">Send a message! <i class="fa fa-paper-plane-o"></i></button>      
                             
                    <div class="contact-form-thanks">
                            
                        <div class="contact-form-thanks-content">
                        
                            Your message has been sent successfully. 
                            <span class="contact-form-thanks-close">Close this notice.</span>
                        
                        </div>
                    
                    </div>         
                                                                         
                </form>
            
            </div>
        
        </div>
    
    </div>  

    <div id="quote-popup">
    
        <div id="quote-popup-background">
        </div>
    
        <div id="quote-popup-content" class="animated speed">
        
            <div id="quote-popup-close"><i class="fa fa-times"></i></div>
            
            <ul id="quote-popup-tabs">
            
                <li data-quote-tab-for="travel-insurance">Travel insurance</li>
                <li data-quote-tab-for="car-insurance">Car insurance</li>
                <li data-quote-tab-for="life-insurance">Life insurance</li>
                <li data-quote-tab-for="house-insurance">House insurance</li>
            
            </ul>

            <div class="quote-forms">

                <!--
                travel insurance
                -->
                <div class="quote-form" data-quote-form-for="travel-insurance">
                
                    <i class="fa fa-bus background-icon"></i>
                
                    <div class="quote-form-background" style="background-image: url( '_assets/_img/vacations.jpg' );">
                    </div>
                    
                    <div class="quote-form-content">

                        <h2>Travel Insurance <span>Quote</span></h2>
                        <div class="form">

                            <h4>Level of protection: <span class="slider-value quote-form-element" data-name="Level of protection" data-slider-id="travel-protection-level">$<span></span></span></h4>
                            <div class="slider" data-slider-min="10000" data-slider-max="1000000" data-slider-start="200000" data-slider-step="10000" data-slider-id="travel-protection-level"></div>

                            <h4>Contact details:</h4>
                            <input type="text" class="quote-form-element quote-form-client-name" name="Full name" placeholder="Full Name..." />
                            
                            <span class="custom-dropdown last">
                            
                                <select name="How many persons?" class="custom-dropdown-select quote-form-element">
                                
                                    <option value="-">How many persons?</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                
                                </select>
                            
                            </span>
                            
                            <input type="text" name="Phone Number" placeholder="Phone Number..." class="quote-form-element" />
                            <input type="text" name="E-mail Address" placeholder="E-mail Address..." class="quote-form-element quote-form-client-email last" />
                            
                            <h4>Travel:</h4>
                            <input type="text" name="Destination" placeholder="Destination..." class="quote-form-element" />
                            
                            <span class="custom-dropdown last">
                                
                                <select name="How long?" class="custom-dropdown-select quote-form-element">

                                    <option value="-">How long?</option>
                                    <option value="less than 1 week">less than 1 week</option>
                                    <option value="1 week">1 week</option>
                                    <option value="2 weeks">2 weeks</option>
                                    <option value="3 weeks">3 weeks</option>
                                    <option value="4 weeks and more">4 weeks and more</option>

                                </select>

                            </span>

                            <button class="button button-navy-blue send-quote" type="button">Get a quote <i class="fa fa-paper-plane-o"></i></button>
                            
                            <div class="quote-form-thanks">
                            
                                <div class="quote-form-thanks-content">
                                
                                    Your insurance quote has been sent successfully. 
                                    <span class="quote-form-thanks-close">Close this notice.</span>
                                
                                </div>
                            
                            </div>
                        
                        </div>

                    </div>
                
                </div>
                
                <!--
                car insurance
                -->
                <div class="quote-form" data-quote-form-for="car-insurance">
                
                    <i class="fa fa-car background-icon"></i>
                
                    <div class="quote-form-background" style="background-image: url( '_assets/_img/in-the-car.jpg' ); background-position: 50% 50%;">
                    </div>
                    
                    <div class="quote-form-content">

                        <h2>Car Insurance <span>Quote</span></h2>
                        <div class="form">

                            <h4>Contact details:</h4>
                            <input type="text" class="quote-form-element quote-form-client-name" name="Full name" placeholder="Full Name..." />
                            
                            <span class="custom-dropdown last">
                            
                                <select name="Age" class="custom-dropdown-select quote-form-element">
                                
                                    <option value="-">Your age</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                    <option value="32">32</option>
                                    <option value="33">33</option>
                                    <option value="34">34</option>
                                    <option value="35">35</option>
                                    <option value="36">36</option>
                                    <option value="37">37</option>
                                    <option value="38">38</option>
                                    <option value="39">39</option>
                                    <option value="40">40</option>
                                    <option value="41">41</option>
                                    <option value="42">42</option>
                                    <option value="43">43</option>
                                    <option value="44">44</option>
                                    <option value="45">45</option>
                                    <option value="46">46</option>
                                    <option value="47">47</option>
                                    <option value="48">48</option>
                                    <option value="49">49</option>
                                    <option value="50">50</option>
                                    <option value="51">51</option>
                                    <option value="52">52</option>
                                    <option value="53">53</option>
                                    <option value="54">54</option>
                                    <option value="55">55</option>
                                    <option value="56">56</option>
                                    <option value="57">57</option>
                                    <option value="58">58</option>
                                    <option value="59">59</option>
                                    <option value="60">60</option>
                                    <option value="61">61</option>
                                    <option value="62">62</option>
                                    <option value="63">63</option>
                                    <option value="64">64</option>
                                    <option value="65">65</option>
                                    <option value="66">66</option>
                                    <option value="67">67</option>
                                    <option value="68">68</option>
                                    <option value="69">69</option>
                                    <option value="70">70</option>
                                    <option value="71">71</option>
                                    <option value="72">72</option>
                                    <option value="73">73</option>
                                    <option value="74">74</option>
                                    <option value="75">75</option>
                                    <option value="76">76</option>
                                    <option value="77">77</option>
                                    <option value="78">78</option>
                                    <option value="79">79</option>
                                    <option value="80">80</option>
                                    <option value="81">81</option>
                                    <option value="82">82</option>
                                    <option value="83">83</option>
                                    <option value="84">84</option>
                                    <option value="85">85</option>
                                    <option value="86">86</option>
                                    <option value="87">87</option>
                                    <option value="88">88</option>
                                    <option value="89">89</option>
                                    <option value="90">90</option>
                                    <option value="91">91</option>
                                    <option value="92">92</option>
                                    <option value="93">93</option>
                                    <option value="94">94</option>
                                    <option value="95">95</option>
                                    <option value="96">96</option>
                                    <option value="97">97</option>
                                    <option value="98">98</option>
                                    <option value="99">99</option>
                                
                                </select>
                            
                            </span>
                            
                            <input type="text" name="Phone Number" placeholder="Phone Number..." class="quote-form-element" />
                            <input type="text" name="E-mail Address" placeholder="E-mail Address..." class="quote-form-element quote-form-client-email last" />
                            
                            <h4>Your car</h4>
                            <input type="text" name="Car Manufacturer" placeholder="Manufacturer..." class="quote-form-element" />
                            <input type="text" name="Car Model" placeholder="Model..." class="quote-form-element last" />

                            <span class="custom-dropdown">
                            
                                <select name="Registration year" class="custom-dropdown-select quote-form-element">
                                
                                    <option value="-">Registration year</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                    <option value="1993">1993</option>
                                    <option value="1992">1992</option>
                                    <option value="1991">1991</option>
                                    <option value="1990">1990</option>
                                    <option value="1989">1989</option>
                                    <option value="1988">1988</option>
                                    <option value="1987">1987</option>
                                    <option value="1986">1986</option>
                                    <option value="1985">1985</option>
                                    <option value="1984">1984</option>
                                    <option value="1983">1983</option>
                                    <option value="1982">1982</option>
                                    <option value="1981">1981</option>
                                    <option value="1980">1980</option>
                                    <option value="1979">1979</option>
                                    <option value="1978">1978</option>
                                    <option value="1977">1977</option>
                                    <option value="1976">1976</option>
                                    <option value="1975">1975</option>
                                    <option value="1974">1974</option>
                                    <option value="1973">1973</option>
                                    <option value="1972">1972</option>
                                    <option value="1971">1971</option>
                                    <option value="1970">1970</option>
                                    <option value="1969">1969</option>
                                    <option value="1968">1968</option>
                                    <option value="1967">1967</option>
                                    <option value="1966">1966</option>
                                    <option value="1965">1965</option>
                                    <option value="1964">1964</option>
                                    <option value="1963">1963</option>
                                    <option value="1962">1962</option>
                                    <option value="1961">1961</option>
                                    <option value="1960">1960</option>
                                    <option value="1959">1959</option>
                                    <option value="1958">1958</option>
                                    <option value="1957">1957</option>
                                    <option value="1956">1956</option>
                                    <option value="1955">1955</option>
                                    <option value="1954">1954</option>
                                    <option value="1953">1953</option>
                                    <option value="1952">1952</option>
                                    <option value="1951">1951</option>
                                    <option value="1950">1950</option>
                                
                                </select>
                            
                            </span>

                            <button class="button button-navy-blue send-quote" type="button">Get a quote <i class="fa fa-paper-plane-o"></i></button>
                        
                            <div class="quote-form-thanks">
                            
                                <div class="quote-form-thanks-content">
                                
                                    Your insurance quote has been sent successfully. 
                                    <span class="quote-form-thanks-close">Close this notice.</span>
                                
                                </div>
                            
                            </div>
                        
                        </div>

                    </div>
                
                </div>
                
                <!--
                life insurance
                -->
                <div class="quote-form" data-quote-form-for="life-insurance">
                
                    <i class="fa fa-umbrella background-icon"></i>
                
                    <div class="quote-form-background" style="background-image: url( '_assets/_img/senior-lady-teaching-her-granddaughter-to-knit.jpg' );">
                    </div>
                    
                    <div class="quote-form-content">

                        <h2>Life Insurance <span>Quote</span></h2>
                        <div class="form">

                            <h4>Level of protection: <span class="slider-value quote-form-element" data-name="Level of protection" data-slider-id="life-protection-level">$<span></span></span></h4>
                            <div class="slider" data-slider-min="10000" data-slider-max="1000000" data-slider-start="200000" data-slider-step="10000" data-slider-id="life-protection-level"></div>

                            <h4>Contact details:</h4>
                            <input type="text" class="quote-form-element quote-form-client-name" name="Full name" placeholder="Full Name..." />
                            
                            <span class="custom-dropdown last">
                            
                                <select name="Age" class="custom-dropdown-select quote-form-element">
                                
                                    <option value="-">Your age</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                    <option value="32">32</option>
                                    <option value="33">33</option>
                                    <option value="34">34</option>
                                    <option value="35">35</option>
                                    <option value="36">36</option>
                                    <option value="37">37</option>
                                    <option value="38">38</option>
                                    <option value="39">39</option>
                                    <option value="40">40</option>
                                    <option value="41">41</option>
                                    <option value="42">42</option>
                                    <option value="43">43</option>
                                    <option value="44">44</option>
                                    <option value="45">45</option>
                                    <option value="46">46</option>
                                    <option value="47">47</option>
                                    <option value="48">48</option>
                                    <option value="49">49</option>
                                    <option value="50">50</option>
                                    <option value="51">51</option>
                                    <option value="52">52</option>
                                    <option value="53">53</option>
                                    <option value="54">54</option>
                                    <option value="55">55</option>
                                    <option value="56">56</option>
                                    <option value="57">57</option>
                                    <option value="58">58</option>
                                    <option value="59">59</option>
                                    <option value="60">60</option>
                                    <option value="61">61</option>
                                    <option value="62">62</option>
                                    <option value="63">63</option>
                                    <option value="64">64</option>
                                    <option value="65">65</option>
                                    <option value="66">66</option>
                                    <option value="67">67</option>
                                    <option value="68">68</option>
                                    <option value="69">69</option>
                                    <option value="70">70</option>
                                    <option value="71">71</option>
                                    <option value="72">72</option>
                                    <option value="73">73</option>
                                    <option value="74">74</option>
                                    <option value="75">75</option>
                                    <option value="76">76</option>
                                    <option value="77">77</option>
                                    <option value="78">78</option>
                                    <option value="79">79</option>
                                    <option value="80">80</option>
                                    <option value="81">81</option>
                                    <option value="82">82</option>
                                    <option value="83">83</option>
                                    <option value="84">84</option>
                                    <option value="85">85</option>
                                    <option value="86">86</option>
                                    <option value="87">87</option>
                                    <option value="88">88</option>
                                    <option value="89">89</option>
                                    <option value="90">90</option>
                                    <option value="91">91</option>
                                    <option value="92">92</option>
                                    <option value="93">93</option>
                                    <option value="94">94</option>
                                    <option value="95">95</option>
                                    <option value="96">96</option>
                                    <option value="97">97</option>
                                    <option value="98">98</option>
                                    <option value="99">99</option>
                                
                                </select>
                            
                            </span>
                            
                            <input type="text" name="Phone Number" placeholder="Phone Number..." class="quote-form-element" />
                            <input type="text" name="E-mail Address" placeholder="E-mail Address..." class="quote-form-element quote-form-client-email last" />
                            
                            <h4>Have you used tobacco or nicotine products in the last 12 months?</h4>
                            <div class="checkbox quote-form-element" data-checked="yes" data-name="Have you used tobacco or nicotine products in the last 12 months?">
                            
                                <span class="checkbox-status"><i class="fa fa-check"></i></span>
                                <span class="checkbox-values">
                                
                                    <span class="checkbox-value-checked">Yes, I have</span>
                                    <span class="checkbox-value-unchecked">No, I haven't</span>
                                
                                </span>
                            
                            </div>
                            
                            <button class="button button-navy-blue send-quote" type="button">Get a quote <i class="fa fa-paper-plane-o"></i></button>
                        
                            <div class="quote-form-thanks">
                            
                                <div class="quote-form-thanks-content">
                                
                                    Your insurance quote has been sent successfully. 
                                    <span class="quote-form-thanks-close">Close this notice.</span>
                                
                                </div>
                            
                            </div>
                        
                        </div>

                    </div>
                
                </div>
                
                <!--
                house insurance
                -->
                <div class="quote-form" data-quote-form-for="house-insurance">
                
                    <i class="fa fa-home background-icon"></i>
                
                    <div class="quote-form-background" style="background-image: url( '_assets/_img/modern-town-houses.jpg' );">
                    </div>
                    
                    <div class="quote-form-content">

                        <h2>House Insurance <span>Quote</span></h2>
                        <div class="form">
                        
                            <h4>Your house:</h4>
                            <span class="custom-dropdown">
                            
                                <select name="What sort of property is it?" class="custom-dropdown-select quote-form-element">
                                
                                    <option value="-">What sort of property is it?</option>
                                    <option value="House">House</option>
                                    <option value="Flat / Apartment">Flat / Apartment</option>
                                    <option value="Bungalow">Bungalow</option>
                                    <option value="Town house">Town house</option>
                                    <option value="Other">Other</option>
                                
                                </select>
                            
                            </span>
                            
                            <span class="custom-dropdown last">
                            
                                <select name="What type of property is it?" class="custom-dropdown-select quote-form-element">
                                
                                    <option value="-">What type of property is it?</option>
                                    <option value="Semi-detached">Semi-detached</option>
                                    <option value="Detached">Detached</option>
                                    <option value="Link-detached">Link-detached</option>
                                    <option value="Terraced">Terraced</option>
                                    <option value="End terrace">End terrace</option>
                                
                                </select>
                            
                            </span>
                            
                            <input type="text" class="quote-form-element" name="Roughly when was it built?" placeholder="Roughly when was it built?" />
                            <input type="text" class="quote-form-element last" name="House Postcode" placeholder="House Postcode" />
                        
                            <h4>Contact details:</h4>
                            <input type="text" class="quote-form-element quote-form-client-name" name="Full name" placeholder="Full Name..." />
                            
                            <span class="custom-dropdown last">
                            
                                <select name="Age" class="custom-dropdown-select quote-form-element">
                                
                                    <option value="-">Your age</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                    <option value="32">32</option>
                                    <option value="33">33</option>
                                    <option value="34">34</option>
                                    <option value="35">35</option>
                                    <option value="36">36</option>
                                    <option value="37">37</option>
                                    <option value="38">38</option>
                                    <option value="39">39</option>
                                    <option value="40">40</option>
                                    <option value="41">41</option>
                                    <option value="42">42</option>
                                    <option value="43">43</option>
                                    <option value="44">44</option>
                                    <option value="45">45</option>
                                    <option value="46">46</option>
                                    <option value="47">47</option>
                                    <option value="48">48</option>
                                    <option value="49">49</option>
                                    <option value="50">50</option>
                                    <option value="51">51</option>
                                    <option value="52">52</option>
                                    <option value="53">53</option>
                                    <option value="54">54</option>
                                    <option value="55">55</option>
                                    <option value="56">56</option>
                                    <option value="57">57</option>
                                    <option value="58">58</option>
                                    <option value="59">59</option>
                                    <option value="60">60</option>
                                    <option value="61">61</option>
                                    <option value="62">62</option>
                                    <option value="63">63</option>
                                    <option value="64">64</option>
                                    <option value="65">65</option>
                                    <option value="66">66</option>
                                    <option value="67">67</option>
                                    <option value="68">68</option>
                                    <option value="69">69</option>
                                    <option value="70">70</option>
                                    <option value="71">71</option>
                                    <option value="72">72</option>
                                    <option value="73">73</option>
                                    <option value="74">74</option>
                                    <option value="75">75</option>
                                    <option value="76">76</option>
                                    <option value="77">77</option>
                                    <option value="78">78</option>
                                    <option value="79">79</option>
                                    <option value="80">80</option>
                                    <option value="81">81</option>
                                    <option value="82">82</option>
                                    <option value="83">83</option>
                                    <option value="84">84</option>
                                    <option value="85">85</option>
                                    <option value="86">86</option>
                                    <option value="87">87</option>
                                    <option value="88">88</option>
                                    <option value="89">89</option>
                                    <option value="90">90</option>
                                    <option value="91">91</option>
                                    <option value="92">92</option>
                                    <option value="93">93</option>
                                    <option value="94">94</option>
                                    <option value="95">95</option>
                                    <option value="96">96</option>
                                    <option value="97">97</option>
                                    <option value="98">98</option>
                                    <option value="99">99</option>
                                
                                </select>
                            
                            </span>
                            
                            <input type="text" name="Phone Number" placeholder="Phone Number..." class="quote-form-element" />
                            <input type="text" name="E-mail Address" placeholder="E-mail Address..." class="quote-form-element quote-form-client-email last" />
                        
                            <button class="button button-navy-blue send-quote" type="button">Get a quote <i class="fa fa-paper-plane-o"></i></button>
                        
                            <div class="quote-form-thanks">
                            
                                <div class="quote-form-thanks-content">
                                
                                    Your insurance quote has been sent successfully. 
                                    <span class="quote-form-thanks-close">Close this notice.</span>
                                
                                </div>
                            
                            </div>
                        
                        </div>

                    </div>
                
                </div>
            
            </div>
        
        </div>
    
    </div>

    <header>
    
        <div class="center">

            <div class="logo">
            
                <a href="http://martaniandemo.com/html/insurance"><img src="_assets/_img/logo.png" alt="Insurance Agency" /></a>
            
            </div>
            
            <nav>
            
                <ul class="menu">
                
                    <li><a href="index.php">Home</a></li>
                    <li><button class="menu-element" data-action="show-quote-popup" data-quote-key="life-insurance">Get a quote</button></li>
                    <li><a href="blog.php">Blog</a></li>
                    
                    <li class="active">
                    
                        <a href="agents.php">Pages</a>
                        <i class="fa fa-caret-down"></i>
                        
                        <ul class="submenu animated speed fadeInDown">
                        
                            <li><a href="agents.php">Agents</a></li>
                            
                            <li>

                                <a href="get-a-travel-insurance-quote.php"><i class="fa fa-caret-left"></i> Quote forms</a>
                                <ul class="submenu animated speed fadeInRight">
                                
                                    <li><a href="get-a-life-insurance-quote.php">Life insurance Quote</a></li>
                                    <li><a href="get-a-car-insurance-quote.php">Car insurance Quote</a></li>
                                    <li><a href="get-a-house-insurance-quote.php">House insurance Quote</a></li>
                                    <li><a href="get-a-travel-insurance-quote.php">Travel insurance Quote</a></li>
                                
                                </ul>
                            
                            </li>
                            
                            <li><a href="claims.php">Claims</a></li>
                            <li><a href="contact.php">Contact page</a></li>

                            <li>

                                <a href="travel-insurance.php"><i class="fa fa-caret-left"></i> Insurances promo</a>
                                <ul class="submenu animated speed fadeInRight">
                                
                                    <li><a href="life-insurance.php">Life insurance</a></li>
                                    <li><a href="car-insurance.php">Car insurance</a></li>
                                    <li><a href="house-insurance.php">House insurance</a></li>
                                    <li><a href="travel-insurance.php">Travel insurance</a></li>
                                
                                </ul>
                            
                            </li>

                            <li><a href="404.php">404 page</a></li>
                        
                        </ul>
                    
                    </li>
                    
                    <li><button class="menu-element" data-action="show-contact-popup">Contact</button></li>
    
                </ul>
                
                <div class="menu-responsive"><i class="fa fa-bars"></i></div>
            
            </nav>

        </div>

    </header>

    <section class="box-with-image-left section-top-space">
    
        <div class="center">

            <div class="image" style="background-image: url( '_assets/_img/just-removed.jpg' );">
            </div>

            <div class="content">

                <h3>Get an insurance quote!</h3>
                <h2>House insurance</h2>
                
                <p>Etiam id ante est. Aenean pellentesque quam vel purus tincidunt tristique. Integer arcu nibh, tempus id ultricies ut, vulputate nec nunc. Etiam elit elit, commodo at interdum sed.</p>
                <p>Sed molestie, eros et tempor eleifend, tortor justo ultricies odio, ut viverra est sem eget augue. Ut volutpat lectus vel arcu euismod scelerisque. Aliquam sollicitudin aliquet nisl ut faucibus.</p>
                <button class="button button-navy-blue" data-action="show-quote-popup" data-quote-key="house-insurance">Get a quote <i class="fa fa-paper-plane-o"></i></button>
                
            </div>
            
            <div class="clear">
            </div>
        
        </div>
    
    </section>
    
    <section class="tabs section-gray">
    
        <div class="center">
        
            <ul class="tabs-selector">
            
                <li>
                
                    <i class="fa fa-home"></i>
                    <span>House</span>
                
                </li>
                
                <li>
                
                    <i class="fa fa-building-o"></i>
                    <span>Building</span>
                
                </li>
            
            </ul>
            
            <div class="content">
            
                <div class="content-tab-single">
            
                    <i class="fa fa-home background-icon"></i>
                    
                    <h2>House insurance</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ut egestas erat, eu mattis odio. In pharetra purus sapien, non scelerisque neque scelerisque et. Aliquam metus dolor, vehicula at dictum sed, ultrices vitae ipsum.</p>
                    <p>Sed molestie, eros et tempor eleifend, tortor justo ultricies odio, ut viverra est sem eget augue. Ut volutpat lectus vel arcu euismod scelerisque. Aliquam sollicitudin aliquet nisl ut faucibus. Cras accumsan dignissim neque et pulvinar. Proin aliquam varius convallis. Suspendisse eget arcu id eros cursus ultrices. Phasellus consectetur tellus sit amet libero aliquet rhoncus.</p>
                
                    <div class="insurance-params">
                    
                        <div class="important-number">
                        
                            <span class="notice-top">from</span>
                            <span class="number">$99.00</span>
                        
                        </div>
                        
                        <table class="params">
                    
                            <tr>
                            
                                <td>Level of Protection:</td>
                                <td>from $25.000 to $1.000.000</td>
                            
                            </tr>
                            
                            <tr>
                            
                                <td>Grace Period:</td>
                                <td>up to 30 days</td>
                            
                            </tr>
                            
                            <tr>
                            
                                <td>Hotline Assistance:</td>
                                <td>24-Hour</td>
                            
                            </tr>
                            
                            <tr>
                            
                                <td>Policy Modification:</td>
                                <td>Online</td>
                            
                            </tr>
                            
                            <tr>
                            
                                <td>Windows insured:</td>
                                <td>Yes</td>
                            
                            </tr>
                            
                            <tr>
                            
                                <td>Lorem ipsum dolor:</td>
                                <td>Sit amet</td>
                            
                            </tr>
    
                        </table>
                        
                        <div class="clear">
                        </div>
                    
                    </div>
                
                </div>
                
                <div class="content-tab-single">
            
                    <i class="fa fa-building background-icon"></i>
                    
                    <h2>Building insurance</h2>
                    <p>Sed molestie, eros et tempor eleifend, tortor justo ultricies odio, ut viverra est sem eget augue. Ut volutpat lectus vel arcu euismod scelerisque. Aliquam sollicitudin aliquet nisl ut faucibus. Cras accumsan dignissim neque et pulvinar. Proin aliquam varius convallis. Suspendisse eget arcu id eros cursus ultrices. Phasellus consectetur tellus sit amet libero aliquet rhoncus.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ut egestas erat, eu mattis odio. In pharetra purus sapien, non scelerisque neque scelerisque et. Aliquam metus dolor, vehicula at dictum sed, ultrices vitae ipsum.</p>
                    
                    <div class="insurance-params">
                    
                        <div class="important-number">
                        
                            <span class="notice-top">from</span>
                            <span class="number">$49.00</span>
                        
                        </div>
                        
                        <table class="params">
                    
                            <tr>
                            
                                <td>Level of Protection:</td>
                                <td>from $25.000 to $1.000.000</td>
                            
                            </tr>
                            
                            <tr>
                            
                                <td>Grace Period:</td>
                                <td>up to 30 days</td>
                            
                            </tr>
                            
                            <tr>
                            
                                <td>Hotline Assistance:</td>
                                <td>24-Hour</td>
                            
                            </tr>
                            
                            <tr>
                            
                                <td>Policy Modification:</td>
                                <td>Online</td>
                            
                            </tr>
                            
                            <tr>
                            
                                <td>Windows insured:</td>
                                <td>Yes</td>
                            
                            </tr>
                            
                            <tr>
                            
                                <td>Lorem ipsum dolor:</td>
                                <td>Sit amet</td>
                            
                            </tr>
    
                        </table>
                        
                        <div class="clear">
                        </div>
                    
                    </div>
                
                </div>
            
            </div>
            
            <div class="clear">
            </div>
        
        </div>
    
    </section>
    
    <section class="box-with-image-right">
    
        <div class="center">

            <div class="content">

                <h2>Protect your Home</h2>
                
                <p>Sed molestie, eros et tempor eleifend, tortor justo ultricies odio, ut viverra est sem eget augue. Ut volutpat lectus vel arcu euismod scelerisque. Aliquam sollicitudin aliquet nisl ut faucibus.</p>
                <p>Etiam id ante est. Aenean pellentesque quam vel purus tincidunt tristique. Integer arcu nibh, tempus id ultricies ut, vulputate nec nunc. Etiam elit elit, commodo at interdum sed. Cras accumsan dignissim neque et pulvinar.</p>
                
                <ul class="documents">
                
                    <li class="document document-pdf">
                    
                        <i class="fa fa-file-pdf-o"></i>
                        <a href="#">General Insurance Conditions</a>
                        <span>Document size: 34kb</span>
                    
                        <div class="clear">
                        </div>
                    
                    </li>
                
                </ul>

            </div>
            
            <div class="image" style="background-image: url( '_assets/_img/watching-cartoons-in-the-net.jpg' );">
            </div>
            
            <div class="clear">
            </div>
        
        </div>
    
    </section>

    <section class="references">
    
        <div class="center">

            <div class="left">

                <h3>References</h3>
                <h2>What our Clients say?</h2>
                
                <p>Donec eget elit vitae tortor convallis mattis. Aliquam erat volutpat. Integer vitae quam ut leo accumsan consequat eu ac sapien. Quisque tincidunt leo enim, in pulvinar felis consectetur ac.</p>
                <p><button class="button button-navy-blue" data-action="show-quote-popup" data-quote-key="car-insurance">Get a quote <i class="fa fa-paper-plane-o"></i></button></p>
            
            </div>
            
            <div class="right">
            
                <div class="references">
                
                    <div class="single-reference">
                    
                        <div class="single-reference-content">
                        
                            <p>Proin et posuere dolor, a finibus tellus. Phasellus suscipit gravida magna. Nam posuere nisi eu ex sodales, sit amet dictum turpis maximus. Maecenas sodales vehicula tellus, at imperdiet risus.</p>
                                  
                        </div>
                        
                        <div class="single-reference-author">
                        
                            <strong>Anthony Smith</strong>October 12, 2014
                        
                        </div>
                    
                    </div>
                    
                    <div class="single-reference">
                    
                        <div class="single-reference-content">
                        
                            <p>Quisque pharetra lorem quis libero ornare fringilla. Maecenas nisl justo, suscipit vel tortor at, varius auctor erat. Maecenas efficitur felis nec arcu volutpat lacinia.</p>
                                  
                        </div>
                        
                        <div class="single-reference-author">
                        
                            <strong>Susane Doe</strong>January 05, 2015
                        
                        </div>
                    
                    </div>
                
                </div>

            </div>
            
            <div class="clear">
            </div>
        
        </div>
    
    </section>
    
    <section class="contact section-gray">
    
        <div class="center">
        
            <i class="fa fa-envelope-o background-icon"></i>
            <div class="contact-details">

                <div class="contact-detail-single">
                
                    <h3><i class="fa fa-map-marker"></i> Company informations</h3>
                    <p><strong>Insurance Agency</strong><br /> John Doe</p>
                    <p class="without-margin-bottom">5002 Example Street<br /> Los Angeles, CA 90034</p>
                     
                </div>

                <div class="contact-detail-single">
                
                    <h3><i class="fa fa-envelope-o"></i> Contact details</h3>
                    <p>E-mail address: <br /><a href="#">contact@insuranceagency.com</a></p>     
                    <p class="without-margin-bottom"><button class="button button-navy-blue" data-action="show-contact-popup">Contact us! <i class="fa fa-paper-plane-o"></i></button></p>
                
                </div>
                
                <div class="contact-detail-single contact-detail-single-last">
                
                    <h2>(+123) 456 789 000</h2> 
                    <p>Available 8:00am - 4:00pm</p> 
                
                </div>
            
            </div>

        </div>
    
    </section>

    <footer>

        <div class="center">
        
            <div class="green-line">
            </div>
            
            <nav>
        
                <ul class="left">
    
                    <li>
                    
                        <h4>Insurances</h4>  
                        <ul class="sub">
                        
                            <li><a href="life-insurance.php">Life insurance</a></li>
                            <li><a href="car-insurance.php">Car insurance</a></li>
                            <li><a href="house-insurance.php">House insurance</a></li>
                            <li><a href="travel-insurance.php">Travel insurance</a></li>
                        
                        </ul>
                    
                    </li>
    
                    <li>
                    
                        <h4>Pages</h4>
                        <ul class="sub">
                        
                            <li><a href="index.php">Home</a></li>
                            <li><a href="agents.php">Agents</a></li>
                            <li><a href="claims.php">Claims</a></li>
                            <li><button class="menu-element" data-action="show-quote-popup" data-quote-key="life-insurance">Get a quote</button></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><button class="menu-element" data-action="show-contact-popup">Contact</button></li>
                        
                        </ul>
                    
                    </li>
                    
                    <li>
                    
                        <h4>Find us!</h4>
                        <ul class="sub">
                        
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Google+</a></li>
                        
                        </ul>
                    
                    </li>
                    
                </ul>
            
            </nav>
            
            <ul class="right">
            
                <li>Copyright &copy; 2015 <span class="divider">&middot;</span> <a href="index.php">Insurance Agency</a></li>
                <li><div class="fb-like" data-href="https://www.facebook.com/envato" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div></li>
            
            </ul>

            <div class="clear">
            </div>
        
        </div>
    
    </footer>

    <!--
    facebook SDK
    -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "../../../connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <script src="_assets/_libs/jquery.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="_assets/_libs/no-ui-slider/jquery.nouislider.all.min.js"></script>
    <script src="_assets/_libs/smoothscroll.js"></script>
    <script src="_assets/_libs/parallax.js"></script>
    <script src="_assets/_js/functions.js"></script>

</body>

<!-- Mirrored from martaniandemo.com/html/insurance/house-insurance.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Oct 2015 06:03:18 GMT -->
</html>