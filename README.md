# Sample WordPress Plugin
This project is intended to be an introduction to plugin development, starting with a very simple plugin and then refactoring multiple times.

## The problem:
Our client runs a blog in which most posts contain affiliate links. We have told our client that every post containing these links must contain a disclaimer, as per [FTC Guidelines](https://www.ftc.gov/tips-advice/business-center/guidance/ftcs-endorsement-guides-what-people-are-asking). Our client realizes that every time they miss a disclosure, it could cost them up to $16,000.

## The solution:
We both agree that it is best to include a discolsure automatically for every blog post.

## Repository folder guide:
*(Each subfolder in this repository is the same plugin, but refactored in one way or another
)*

- **1-basic-plugin**

	This is the most basic version of our plugin. It gets the job done, but it can be optimized a bit.

- **2-output-buffer**

	We decided our code could be a little cleaner, so we use an output buffer.

- **3-separate-view-and-logic**

	We really want to avoid mixing logic and views, so we will put our view in a ```partials``` folder.

- **4-internationalization-and-sanitization**

	Our client would really like to use this in the future on another site that is in Spanish, so let's make that a possibility right from the start. We need to make sure to sanitize all translations, too!