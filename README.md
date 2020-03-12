# Hearts and Minds theme

This repository contains the code for the Hearts and Minds charity website theme.

## Frontend

To frontend code for this project can be found here:

https://heartsandminds.github.io/frontend/?p=templates-homepage

## Theme

### Categories

Articles (posts) can be set to one or more categories so it appears on the required pages.

| Category     | Description                                                                        | Slug         |
| ------------ | ---------------------------------------------------------------------------------- | ------------ |
| Front page   | Displays articles on the homepage, the most recent 3 articles will be displayed    | front-page   |
| News         | Displays articles on the news page, this is the default category for all articles  | news         |
| Case Studies | Displays articles on the impact page, the most recent 3 articles will be displayed | case-studies |

### Content

The following types of content can using the Content menu item.

| Type           | Description                                       | Slug           |
| -------------- | ------------------------------------------------- | -------------- |
| About us       | Displays the main articles on the about us page   | about-us       |
| Our values     | Displays charity values on the about us page      | our-values     |
| Our impact     | Displays the impact cards on the 'impact' page    | our-impact     |
| Survey results | Displays the survey results on the 'impact' page  | survey-results |

## Developing

* Download, install and start a [MAMP](https://www.mamp.info/en/)/[XAMPP](https://www.apachefriends.org/index.html) or suitable AMP stack environment.

* Download [Wordpress](https://en-gb.wordpress.org/download/) and extract zip file into a folder named 'heartsandminds' within the htdocs folder of your development server (e.g. for MAMP users it would be Applications/MAMP/htdocs/heartsandminds)

* Clone this repo into the themes folder - heartsandminds/wp-conent/themes: 
```
git clone https://github.com/heartsandminds/theme.git
```

* Follow the development setup instructions from [heartsandminds/dev-setup](https://github.com/heartsandminds/dev-setup)
