# Producing a Macedonian Version of the Program

## High-Level Overview
- **Externalize Text**: Ensure all text is externalized from the main codebase.
- **Use Key-Value Pairs**: Store translations in key-value pairs for easy management.
- **Provide Clear Instructions**: Give clear instructions to the translation agency with context for each string.
- **Test Extensively**: After importing translations, test extensively to ensure everything works as expected.
- **Support Multiple Languages**: Implement support for multiple languages, allowing users to switch between them seamlessly.


## Step by step breakdown

### Step 1: Externalize Strings
- **Identify All Textual Content**: Go through your code and identify all the strings that need to be translated. This includes all nursery rhyme lines, animal names, and sounds.
- **Create a Language File**: Create a separate language file (e.g., `translations.php`) to store all the strings in a key-value format. This makes it easy to manage and swap out languages.

```php
// translations.php
return [
    'song_verse' => "Old MacDonald had a farm, E I E I O,\nAnd on his farm, he had a %s, E I E I O.\nWith a %s %s here and a %s %s there,\nHere a %s, there a %s, everywhere a %s %s.\nOld MacDonald had a farm, E I E I O.\n\n",
    'animals' => [
        'cow' => 'крава',
        'dog' => 'куче',
        'cat' => 'мачка',
        'duck' => 'пајка',
        'pig' => 'свиња'
    ],
    'sounds' => [
        'moo' => 'му',
        'woof' => 'ав',
        'meow' => 'мјау',
        'quack' => 'квак',
        'oink' => 'грок'
    ]
];
```

### Step 2: Use Translation Keys in Code
- **Modify Your Code**: Replace the hardcoded strings in your code with references to the language file. This can be done using a simple function to retrieve the translated strings.

```php
// Helper function to get translation
function __($key, $placeholders = []) {
    $translations = include 'translations.php';
    $string = $translations[$key] ?? $key;
    foreach ($placeholders as $index => $value) {
        $string = str_replace("%$index", $value, $string);
    }
    return $string;
}

// Usage in your app
echo __( 'song_verse', ['крава', 'му', 'му', 'му', 'му', 'му', 'му', 'му', 'му'] );
```

### Step 3: Translation for External Agency
- **Export Strings for Translation**: Extract all the strings from the language file and provide them to the translation agency in a simple format (e.g., an Excel sheet or CSV file) where they can add the Macedonian translations.


```csv
Key,English,Macedonian
song_verse,Old MacDonald had a farm, E I E I O,\nAnd on his farm, he had a %s, E I E I O.\nWith a %s %s here and a %s %s there,\nHere a %s, there a %s, everywhere a %s %s.\nOld MacDonald had a farm, E I E I O.,
animals.cow,cow,крава
animals.dog,dog,куче
animals.cat,cat,мачка
animals.duck,duck,пајка
animals.pig,pig,свиња
sounds.moo,moo,му
sounds.woof,woof,ав
sounds.meow,meow,мјау
sounds.quack,quack,ква
sounds.oink,oink,рук
```

### Step 4: Implement the Translations

- **Import Translations**: Once the translations are completed by the agency, import them back into your language file.
- **Test the Application**: Thoroughly test the application to ensure that all translations are displayed correctly and there are no missing strings.

### Step 5: Localization Support

- **Console Language Option**: Implement a mechanism to allow users to choose their language when running the console application. This can be done using command-line arguments or environment variables.

```php
$options = getopt("", ["lang::"]);
$lang = $options['lang'] ?? 'en';
$translations = include "translations_{$lang}.php";
```

- **User Interaction**: Modify your console application to prompt users for their preferred language at the start or use command-line options to select the language dynamically.

```php
echo "Select language (en/mk): ";
$lang = trim(fgets(STDIN));
if (!in_array($lang, ['en', 'mk'])) {
    $lang = 'en';
}
$translations = include "translations_{$lang}.php";

// Use the translations as needed
```