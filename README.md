# Let's roll on sunday
## A visualization about motorcycle thievery in Colombia

Thievery in general is a concern to every community, in Colombia this fenomena has been increasing year after year. In this case the graphics represent the amount of motorcycle thievery reports since january 2010 to september 2018.

This visualization is part of an activity for the [Visual Analytics class - Uniandes 2018-20](http://johnguerra.co/classes/visual_analytics_fall_2018/). Data was taken from https://datos.gov.co site and preprocessed using Microsoft Excel to create a new CSV file to work with. The graphics present the number of motorcycle thievery reports since january 2010 to september 2018.

Data was published by [Policia Nacional de Colombia](https://www.policia.gov.co/).
* 2010 https://www.datos.gov.co/Seguridad-y-Defensa/Delito-Hurto-Motocicletas/khgh-fxad
* 2011 https://www.datos.gov.co/Seguridad-y-Defensa/Delito-hurto-de-motocicletas/r84m-cnr3
* 2012 https://www.datos.gov.co/Seguridad-y-Defensa/Delito-Hurto-De-Motocicletas/a5gc-b6k9
* 2013 https://www.datos.gov.co/Seguridad-y-Defensa/Delito-Hurto-De-Motocicletas/tgae-d6ih
* 2014 https://www.datos.gov.co/Seguridad-y-Defensa/Delito-Hurto-De-Motocicletas/ya9q-jbhx
* 2015 https://www.datos.gov.co/Seguridad-y-Defensa/Delito-Hurto-Motocicletas/p6u4-rfsp
* 2016 https://www.datos.gov.co/Seguridad-y-Defensa/Hurto-de-motocicletas-2016/nw2j-xsxp
- 2017 https://www.datos.gov.co/Seguridad-y-Defensa/Hurto-de-motocicletas-2017/sv23-z8wd
* 2018 https://www.policia.gov.co/contenido/hurto-motocicletas-2018-0

## Objective
To generate an interactive visualization to present and summarize the motorcycle thievery reports trend over the time since 2010 to the present.

## Used Technologies
* [D3](https://d3js.org/)
* [Materialize CSS](https://materializecss.com)
* Microsoft Excel

## Local execution
In order to execute the visualization locally you must have a local web server installed. Fow Windows it's recommended to use [1&1](https://www.1and1.com/digitalguide/server/tools/xampp-tutorial-create-your-own-local-test-server/) tutorial, [Gestiona tu Web](https://www.gestionatuweb.net/instalar-un-servidor-web-en-linux-para-pruebas-y-aprendizaje-con-xampp/) for Linux and [MAMP](https://documentation.mamp.info/en/MAMP-Mac/First-Steps/) for macOS.

## Screenshots
![preview](/screenshot.png)

# About the vis
## What
Dataset Type: Temporal

Items: Motorcycle thievery report

Attributes:

1. Date & time (Temporal)
2. Department (Categorical)
3. Count (Ordered, Quantitative)

## Why
* Overview the behaviour of motorcycles thievery reports over time. **(Summarize - Trends)**
* Identify possible peaks in specific days. **(Identify - Outliers)**
* Compare the overall behaviour of motorcycles thievery reports between years. **(Compare - Features)**
* Derive the amount of thievery reports per day. **(Derive - Features)**

## How
* [1] (Days) Encode: Arrange, Separate, Order & Align.
* [1] Facet: Juxtapose.
* [3] Encode: Arrange, Express.
* [3] Map: Color (saturation) .
* [2] Reduce: Filter.
* Mark: Shape.
* Channels:
* * [1] Position.
* * [3] Color (saturation).


## Insights
* During easter week, on wednesday, thursday and friday motorcycles thievery reduces.
* In general, motorcycles thievery reduces on sundays.
* There are usually more reports in january 1st than december 31th.
* 2016 was the year in which the most robberies were reported.
* One month after the rise of IVA to 19% in 2017, motorcycles thievery reports reduced.
* Motorcycles thievery reports increased after the announce of SOAT prices in january 2018.

# Related Content
* [Visualization](https://cubosensei.github.io/va-tarea4)
* [Slides](https://docs.google.com/presentation/d/1XOF9YEw4gRdQSf_bXtG3oWZiL31VStLo9VDSLJeosgU/edit?usp=sharing)
* [YouTube Video]()


# Credits
* This content is published with 2018 MIT licence by [Manuel Alvarado](http://www.manalco.co).
* Data by [Policia Nacional de Colombia](https://www.policia.gov.co).
