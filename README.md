# isoflags
[![License](https://poser.pugx.org/mainstreamer/emojiisoflags-bundle/license)](https://packagist.org/packages/mainstreamer/emojiisoflags-bundle) 
[![Latest Stable Version](https://poser.pugx.org/mainstreamer/emojiisoflags-bundle/v/stable)](https://packagist.org/packages/mainstreamer/emojiisoflags-bundle) 
[![Total Downloads](https://poser.pugx.org/mainstreamer/emojiisoflags-bundle/downloads)](https://packagist.org/packages/mainstreamer/emojiisoflags-bundle) 

Symfony bundle providing service `FlagsGenerator` for getting emoji flags from iso country codes

### install:
`
composer require mainstreamer/emojiisoflags-bundle
`

### usage:
```
use Symfony\Component\HttpFoundation\Response;
use Rteeom\EmojiISOFlagsBundle\Service\FlagsGenerator;

class MyController 
{ 
 public function someAction(FlagsGenerator $generator): Response
    {
        $flag = $generator->getEmojiFlag('gb');

        return new Response($flag);
    }
}

```
