<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from martaniandemo.com/html/insurance/blog-single.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Oct 2015 06:03:53 GMT -->
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
                    <li class="active"><a href="blog.php">Blog</a></li>
                    
                    <li>
                    
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
    
    <section class="blog section-top-space">
    
        <i class="fa fa-newspaper-o background-icon"></i>
    
        <div class="center">
        
            <ul class="recent-news recent-news-full">
            
                <li class="recent-news-single">

                    <div class="recent-news-full-content">
                    
                        <div class="content-wrapper">

                            <img src="_assets/_img/explaining-terms.jpg" alt="" />
                            <div class="post-data">
                        
                                3 days ago
                                <span class="divider">&middot;</span>
                                by <a href="#">Martanian</a> 
                                <span class="divider">&middot;</span>
                                <a href="#">1 comment</a>
                        
                            </div>
                            
                            <h1>How to choose best life insurance</h1>
                            <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean semper faucibus lacus, vel pretium metus. Praesent suscipit malesuada pretium.</strong></p>
                            
                            <h2>Header H2</h2>
                            <p>Duis condimentum at velit a tincidunt. Duis diam mauris, luctus a dolor quis, adipiscing placerat mi. Maecenas imperdiet massa et lorem accumsan dictum. Nunc sit amet vehicula justo, vehicula lacinia purus.</p>
    
                            <h3>Header H3</h3>
                            <p>Sed magna neque, interdum ut vulputate sed, cursus eu risus. Phasellus sagittis interdum magna, vel ultricies tellus porttitor ut. Vivamus malesuada varius quam quis mollis. Mauris sodales, mi ac bibendum varius, nibh ligula tempus velit, sed convallis lectus metus ac justo.</p>
                            
                            <h4>Header H4</h4>
                            <p>Nunc nisi felis, malesuada ac sagittis sed, tempus nec odio. Vivamus ullamcorper pretium ipsum, id molestie elit dapibus vitae. Vestibulum ut odio id sem ultrices convallis vel id diam. Aliquam erat volutpat. Aliquam mattis lacus id neque posuere, ac egestas mi volutpat. Maecenas augue ante, laoreet vitae elementum rhoncus, pharetra eget erat.</p>
                            <blockquote>
                            
                                <p>Morbi vestibulum consectetur molestie. Aliquam vel laoreet lectus, nec gravida diam. Nunc cursus facilisis mauris nec vulputate. Morbi varius sapien eget pulvinar consectetur.</p>
                                <cite>John Doe</cite>
                                
                            </blockquote>
                            
                            <h5>Header H5</h5>
                            <p>Nulla sapien massa, tempus in eros vel, viverra lacinia diam. Nam quis felis ac nunc iaculis suscipit. Nunc varius mi purus, volutpat sagittis lorem viverra vel. Curabitur blandit orci sit amet turpis tempor, ut consectetur dui porttitor. In hac habitasse platea dictumst. Praesent lorem justo, tincidunt a velit eu, dictum interdum arcu.</p>
                            <ul>
                                
                                <li>Nunc sit amet vehicula justo</li>
                                <li>Duis diam mauris, luctus</li>
                                
                                <li>
                                
                                    Vivamus ullamcorper pretium ipsum
                                    <ol>
                                    
                                        <li>Aenean semper faucibus lacus</li>
                                        <li>Duis condimentum at velit</li>
                                        
                                    </ol>
                                    
                                </li>
                                
                                <li>Maecenas augue ante</li>
                                
                            </ul>
                            
                            <p>Donec vitae tellus eu purus lacinia elementum. Morbi fermentum mattis magna. Vestibulum vel gravida sem. Morbi iaculis egestas turpis, a bibendum leo tristique ut. Nullam sed eros a est bibendum imperdiet et et elit. Morbi non est at velit blandit placerat fermentum sed leo.</p>
                        
                        </div>
                        
                        <div class="comments">
                        
                            <div class="green-line">
                            </div>
                        
                            <h2>Comments</h2>
                            <ol class="comments-list">
                            
                                <li class="comment">
                                
                                    <div class="comment-author-avatar">
                                    
                                        <img alt="" src="http://1.gravatar.com/avatar/d4c74594d841139328695756648b6bd6?s=40&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D40&amp;r=G" />
                                    
                                    </div>
                                    
                                    <div class="comment-container">
            
                                        <div class="comment-author-info">
                                        
                                            <div class="comment-author-name">John</div>
                                            <time datetime="2015-02-11T17:45:54+00:00">February 11, 2015 at 5:45 pm</time>
                        
                                        </div>

                                        <div class="comment-content">
                        
                                            <p>Nunc nisi felis, malesuada ac sagittis sed, tempus nec odio. Vivamus ullamcorper pretium ipsum, id molestie elit dapibus vitae. Vestibulum ut odio id sem ultrices convallis vel id diam. Aliquam erat volutpat. Aliquam mattis lacus id neque posuere, ac egestas mi volutpat. Maecenas augue ante, laoreet vitae elementum rhoncus, pharetra eget erat.</p>
                                            <p><a class="comment-reply-link" href="#">Reply</a></p>
                                            
                                        </div>
                                    
                                    </div>

                                    <ul class="children">
                                    
                                        <li class="comment bypostauthor">
                                    
                                            <div class="comment-author-avatar">
                                            
                                                <img alt="" src="http://1.gravatar.com/avatar/ff471dc0e672fab674f6faf3b4d1920c?s=40&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D40&amp;r=G" />
                                            
                                            </div>
                                            
                                            <div class="comment-container">
                                            
                                                <div class="comment-author-info">
                                                
                                                    <div class="comment-author-name">Martanian</div>
                                                    <time datetime="2015-02-11T17:47:01+00:00">February 11, 2015 at 5:47 pm</time>
                                
                                                </div>
                                              
                                                <div class="comment-content">
                                                        
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean semper faucibus lacus, vel pretium metus. Praesent suscipit malesuada pretium. Quisque ultrices feugiat nulla vel molestie. Mauris suscipit quis dui et pharetra.</p>
                                                    <p><a class="comment-reply-link" href="#">Reply</a></p>
                                                    
                                                </div>
    
                                            </div>    
                                
                                        </li>
    
                                    </ul>
                                
                                </li>
                                
                                <li class="comment">
                            
                                    <div class="comment-author-avatar">
                                    
                                        <img alt="" src="http://0.gravatar.com/avatar/a7ff8338e0469a9e8dc3bea76cd37e01?s=40&amp;d=http%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D40&amp;r=G" />
                                    
                                    </div>
                                    
                                    <div class="comment-container">
                                    
                                        <div class="comment-author-info">
                                        
                                            <div class="comment-author-name">Susane</div>
                                            <time datetime="2015-02-11T17:46:10+00:00">February 11, 2015 at 5:46 pm</time>
                        
                                        </div>
                        
                                        <div class="comment-content">
                                                
                                            <p>Donec vitae tellus eu purus lacinia elementum. Morbi fermentum mattis magna. Vestibulum vel gravida sem. Morbi iaculis egestas turpis, a bibendum leo tristique ut. Nullam sed eros a est bibendum imperdiet et et elit. Morbi non est at velit blandit placerat fermentum sed leo.</p>
                                            <p><a class="comment-reply-link" href="#">Reply</a></p>
                                            
                                        </div>
                                                
                                    </div>    
                        
                                </li>
                
                            </ol>

                            <form method="post" class="form">
                            
                                <div class="green-line">
                                </div>
                            
                                <h2>Leave a reply</h2>
                            
                                <input type="text" name="" placeholder="Name..." />
                                <input type="text" name="" placeholder="E-mail..." />
                                <input type="text" name="" placeholder="Website..." class="last" />
                                
                                <textarea rows="5" cols="5" placeholder="Comment..." class="last"></textarea>
                                <button class="button button-navy-blue">Add your comment <i class="fa fa-share-square-o"></i></button>
                            
                            </form>
                        
                        </div>
                    
                    </div>
                    
                    <div class="clear">
                    </div>
                
                </li>
            
            </ul>
            
            <div class="sidebar">
            
                <div class="sidebar-background">
                </div>
            
                <div class="widget">
                
                    <h3>Most commented <span>news</span></h3>
                    <ul class="most-commented-news">
                        
                        <li>
                            
                            <a href="blog-single.php">How to choose best life insurance?</a>
                            <div class="data">1 month ago &middot; 6 comments</div>
                            <div class="line"></div>
                      
                        </li>
                        
                        <li>
                            
                            <a href="blog-single.php">Safe travels with family</a>
                            <div class="data">1 month ago &middot; 3 comment</div>
                            <div class="line"></div>
                      
                        </li>
                        
                        <li>
                            
                            <a href="blog-single.php">Thousandth satisfied customer</a>
                            <div class="data">2 months ago &middot; 1 comment</div>
                        
                        </li>
                    
                    </ul>
                
                </div>
                
                <div class="widget">

                    <h3>Popular <span>tags</span></h3>
                    <div class="tagcloud">
                    
                        <a href="#">Life Insurance</a>
                        <a href="#">Our team</a>
                        <a href="#">Travel</a>
                        <a href="#">Cars</a>
                        <a href="#">Insurance Agency</a>
                        <a href="#">Family</a>
                    
                    </div>
                
                </div>
                
                <div class="widget-call-to-action" style="background-image: url( '_assets/_img/pretty-woman-in-office.jpg' );">
                
                    <h3>Get a free quote</h3>
                    <div class="textwidget">
                    
                        <p>Justo enim cursus ligula, et tristique dui justo at ligula. Nullam aliquet blandit volutpat. Proin lobortis est non mauris lobortis, non mattis felis congue.</p>
                        <p class="without-margin-bottom"><button class="button button-white" data-action="show-quote-popup" data-quote-key="life-insurance">Get a quote <i class="fa fa-paper-plane-o"></i></button></p>
                    
                    </div>
                
                </div> 
                
                <div class="widget">
                
                    <h3><span>Archive</span></h3>
                    <ul>
                    
                        <li><a href="#">May 2015</a></li>
                        <li><a href="#">April 2015</a></li>
                        <li><a href="#">March 2015</a></li>
                        <li><a href="#">February 2015</a></li>
                    
                    </ul>
                
                </div>
                
                <div class="widget">
                
                    <h3>Care about <span>your car</span></h3>
                    <div class="textwidget">
                    
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean massa lacus, mattis at ligula quis, sodales facilisis ipsum. Sed pretium, nibh nec gravida tincidunt.</p>
                        <p>Justo enim cursus ligula, et tristique dui justo at ligula. Nullam aliquet blandit volutpat. Proin lobortis est non mauris lobortis, non mattis felis congue.</p>
                    
                    </div>
                
                </div>        
            
            </div>
            
            <div class="clear">
            </div>
        
        </div>
    
    </section>
    
    <section class="image-slogan with-parallax" style="background-image: url( '_assets/_img/playing-with-child.jpg' );">
    
        <div class="flying-1">
        
            <span>Take care of your child</span>
        
        </div>
        
        <div class="flying-2">
        
            <h3>Insurances for<br /> your child's future</h3>
            <p>Curabitur iaculis ante a nibh vulputate sollicitudin.</p>

            <button class="button button-white" data-action="show-quote-popup" data-quote-key="life-insurance">Get a quote <i class="fa fa-paper-plane-o"></i></button>
        
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

<!-- Mirrored from martaniandemo.com/html/insurance/blog-single.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Oct 2015 06:03:53 GMT -->
</html>