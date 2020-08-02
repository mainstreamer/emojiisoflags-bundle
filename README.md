# isoflags
[![License](https://poser.pugx.org/rteeom/isoflags/license)](https://packagist.org/packages/rteeom/isoflags) 
[![Latest Stable Version](https://poser.pugx.org/rteeom/isoflags/v/stable)](https://packagist.org/packages/rteeom/isoflags) 
[![Total Downloads](https://poser.pugx.org/rteeom/isoflags/downloads)](https://packagist.org/packages/rteeom/isoflags) 

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

        return new Responce($flag);
    }
}

```
