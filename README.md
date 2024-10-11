# Forum REST API

**Version**: 1.0  
**Author**: Drew Winkles  
**Description**: This plugin provides a simple REST API for bbPress, enabling you to retrieve bbPress forums, topics, and replies via the WordPress REST API.

---

## Features

This plugin exposes three endpoints for fetching bbPress data:

1. **Forums**: Retrieve all forums created within bbPress.
2. **Topics**: Fetch all topics within a bbPress forum.
3. **Replies**: Access all replies associated with bbPress topics.

---

## Endpoints

The following REST API routes are registered:

1. **Get all forums**  
   **Endpoint**: `/wp-json/bbpress/v1/forums`  
   **Method**: `GET`  
   **Response**: Returns a list of all bbPress forums.

2. **Get all topics**  
   **Endpoint**: `/wp-json/bbpress/v1/topics`  
   **Method**: `GET`  
   **Response**: Returns a list of all bbPress topics.

3. **Get all replies**  
   **Endpoint**: `/wp-json/bbpress/v1/replies`  
   **Method**: `GET`  
   **Response**: Returns a list of all bbPress replies.

---

## Installation

1. Upload the `bbpress-rest-api` folder to your `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Ensure bbPress is installed and activated since this plugin relies on bbPress post types (`forum`, `topic`, `reply`).

---

## Usage

Once activated, you can access the bbPress REST API endpoints by navigating to the URLs based on your WordPress installation:

```bash
<your-site-url>/wp-json/bbpress/v1/forums
<your-site-url>/wp-json/bbpress/v1/topics
<your-site-url>/wp-json/bbpress/v1/replies
```

### Example API Request

To fetch all bbPress topics, you can send a GET request to the following URL:

```bash
GET <your-site-url>/wp-json/bbpress/v1/topics
```

### Example Response

```json
[
    {
        "ID": 1,
        "post_title": "First Topic",
        "post_content": "This is the content of the first topic.",
        ...
    },
    {
        "ID": 2,
        "post_title": "Second Topic",
        "post_content": "This is the content of the second topic.",
        ...
    }
]
```

---

## Customization

- You can modify the `posts_per_page` argument in each of the `get_forums()`, `get_topics()`, or `get_replies()` functions to limit the number of items returned.
- Use additional WP_Query arguments to customize the data retrieval as per your needs.

---

## License

This plugin is open-source and available under the [GPL-2.0 License](https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html).

---

## Changelog

**1.0**  

- Initial release of the plugin.
