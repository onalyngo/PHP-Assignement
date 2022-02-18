<?php include("head.php"); ?>
<?php include("page.php"); ?>
    <main>
        <?php if(isset($_GET['content']) && $_GET['content']=='page1') { ?>
                <div style="text-align: center; padding-top: 30px;">
                    <img src="images/community1.jpeg" style="width: 800px; border-radius:5px"/>
                </div>
            <p style="padding-left: 50px; padding-right: 50px;">For all the attention we pay to love stories, some of the most compelling tales (both fiction and not) are those of very best friends, like Thelma and Louise, Woody and Buzz and even Captain Kirk and Spock. No matter what, these besties had each other's backs through thick and thin, despite so many bumps in the road along the way. But, much like romance, if you've ever tried to make a new friend and things just didn't click, it's likely because one of the basic components of friendship simply wasn't there.</p>

            <p style="padding-left: 50px; padding-right: 50px;">"Friendships are relationships that involve two very critical dimensions – interdependence and voluntary participation," explains Northern Illinois University psychologist and friendship expert Dr. Suzanne Degges-White in an email interview. As anyone who's ever been in a friendship knows, it's a complex process and experience. "True friendships are hallmarked by each member's desire to engage with the other – it's about mutual interest in one another's experiences and thoughts, as well as a sense of 'belongingness' and connection," she says. "Friendships require reciprocity – of admiration, respect, trust, and emotional and instrumental support."</p>

        <?php } else if(isset($_GET['content']) && $_GET['content']=='page2'){ ?>
            <div style="text-align: center; padding-top: 30px; margin-bottom: 25px;">
                <img src="images/family2.jpeg" style="max-width: 600px; border-radius:5px"/>
                <img src="images/family3.jpeg" style="max-width: 600px; max-height: 900px; border-radius:5px"/>
            </div>

        <?php } else if(isset($_GET['content']) && $_GET['content']=='page3'){ ?>                
                    <div style="width: 100%; margin-top: 50px;"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Muntinlupa+(Muntinlupa%20Map)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/sport-gps/">swimming watch</a></iframe></div>

        <?php } else { ?>
            <h3 style="padding-left: 50px; padding-top: 50px;">Together We Can Build A Better World</h3>
            <p style="padding-left: 50px; padding-right: 50px;">A forest brimming with diversity is vital for the survival of human beings. Forests are a complex network of living organisms that cohabitate to produce a single entity that is delicately balanced. Forests are multifunctional in nature and contribute to the vitality of our planet. They act as natural shock absorbers during calamities and protect the human settlements in difficult terrain. They protect our rivers, soil, and are a huge carbon sink that helps in reducing global warming.  Humans, an important and superior species of this biological web, has proven itself to be the most destructive of them all. In a span of less than a decade, the global temperature has risen 1 degree more than that of preindustrial levels. Courtesy of human activities and intervention, the global carbon content today has reached the highest since the evolution of humans. In the wake of this global crisis, the IPBES' 2019 Global Assessment Report on Biodiversity and Ecosystem, has pulled the trigger on this race to sustainability. </p>

            <p style="padding-left: 50px; padding-right: 50px; color: gray !important;">"Viewed with one disposition, history has so far been a horrible accumulation of oppression and suffering. Viewed with another disposition, however, history has chronicled humans discovering their own finer potentials and together mounting heroic offensives to attain them - against monarchy, feudalism, slavery, Jim Crow racism, apartheid, sexual subjugation, second class citizenship, sexism, heterosexism, dictatorship, one party rule, capitalism, and coordinatorism (calling itself socialism) - and seeking, in their place, equity, justice, and freedom. The gains humans have made have been steady and plentiful. Now a major leap is possible. Consistent with past efforts, we can now attain fully liberatory goals, including, I think, participatory economics and also alternative structures for polity, culture, and kinship. We have only to make the effort." <small style="font-style: italic;">-- Michael Albert</small></p>
            
        <?php } ?>
    </main>

<?php include("footer.php"); ?> 