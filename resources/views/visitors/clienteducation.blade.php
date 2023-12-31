@extends("layouts.customlayout")

@section("body")







<div class="main-content">
    
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="/">Home</a></li>
          <li>Client Education</li>
        </ol>
        <h2>Client Education</h2>

      </div>
    </section><!-- End Breadcrumbs -->


    <!--about us page content start-->
    <section class="section-padding about-us-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h3>Client Education</h3>
                        
                        <p>
                            As  {{$compd? $compd->companyname :"company name"}}'s client, we want you to understand what’s going on with your portfolio and, more importantly, the reasoning behind our decision making. That’s why we have multiple ways we regularly keep you up-to-date and informed on the markets, our outlook and the reasoning behind our strategic portfolio decisions.
                            <br><br>
                           <strong> Quarterly Reviews</strong><br>
Each quarter you will receive an extensive report published under the direction of the Investment Policy Committee with input from our research staff. In it, we discuss recent market performance and our future market outlook. We also explain our views on current global economic and financial trends, and might cover such topics like:
<ul>
    <li>
What period in history the current stock market most closely resembles?


        
    </li>
    <li>
        How and why prior presidential elections have impacted stocks?
    </li>
    <li>
        What emergent trend could determine beating the market or lagging?
    </li>
</ul>
                        </p>
                        
                        <p>
                            
The goal of this detailed report is to help you understand how current economic and political events are impacting the global stock market. We believe it’s a level of education and transparency few money managers provide to their clients.
                        </p>
                        <p>
                            <strong>MarketMinder</strong><br>
This commentary, now available to the general public, was originally created for {{$compd? $compd->companyname :"company name"}}'s clients. MarketMinder is a source of “straight talk” about the financial markets, with the goal of helping investors understand whether market events are bullish or bearish, and why. The articles are updated every business day by {{$compd? $compd->companyname :"company name"}}s’ editorial staff, who scour over 100 periodicals, blogs and other sources to identify relevant financial news. We provide daily commentary on the markets and highlight stories in the financial media we believe investors should either pay attention to, or ignore.
                        </p>
                       
                        
                    </div>
                    
                    
                    <div>
                        <strong>High-Touch Client Service</strong>
                        
                        <p>At {{$compd? $compd->companyname :"company name"}}, portfolio management is only half the picture. Of equal, if not more, importance is our personalized service. We commit ourselves to understanding your financial needs and giving you the confidence and comfort necessary to help you reach your long-term investing goals.
                   
                        </p>
                        
                        <p>
                              <strong> Education and Information</strong><br>
We want our clients to understand what’s going on with their portfolios and, more importantly, the reasoning behind our decisions. That’s why we have multiple ways we regularly keep you up-to-date and informed on the markets, our outlook and what drives our strategic portfolio decisions.

                            
                        </p>
                    </div>
                    
                    
                    <div>
                        <h3>Client Programs</h3>
                        
                        <p>
                            
                            We continually seeks new ways to enrich your client experience. In addition to helping you achieve your long-term financial goals via portfolio management, we host a series of programs to provide you with timely updates and education regarding the financial markets and your portfolio. We designed these events, held in more than 60 cities nationwide, exclusively for clients of {{$compd? $compd->companyname :"company name"}} to offer unprecedented access to senior decision makers and other clients of the firm. Examples include {{$compd? $compd->companyname :"company name"}} Forecast Seminars, Investment Roundtables, {{$compd? $compd->companyname :"company name"}} Friends events, and more. There is no additional cost to our clients for these events, and we encourage you to attend as many as you would like each year.<br>
This high level of client support and proactive customer service is a cornerstone of our Private Client Group. While most of our industry typically reserves these type of services for institutional investors, we are proud to offer the highest level of customer service to all of our clients whether they’re individual investors or institutions.
                        </p>
                    </div>
        
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Online Section End -->

<div class="clearfix"></div>









@endsection