# https://github.com/herrwinfried/myconfig/blob/windows/scripts/function.psm1#L24C1-L34C2

Function Test-CommandExists {
    Param ($command)
    $oldPreference = $ErrorActionPreference
     
    $ErrorActionPreference = "stop"
    try { if (Get-Command $command) { return $True } }
     
    Catch { return $False }
     
    Finally { $ErrorActionPreference = $oldPreference }
}

if (Test-CommandExists podman) {
    $ContainerRun = "podman"
    $BuildFormat = "--format docker"
}
elseif (Test-CommandExists docker) {
    $ContainerRun = "docker"
}
else {
    Write-Host -ForegroundColor Red "Not Found: Docker or Podman"
    Write-Host "================================================"
    exit 1
}

$Host.UI.RawUI.WindowTitle = "Host - Powershell"

& $ContainerRun build $(Write-Host $BuildFormat) -t jekyll-blog -f host.Dockerfile .
& $ContainerRun run --rm -e JEKYLL_ROOTLESS=1 --volume="$(pwd)/../HTML:/srv/jekyll:Z" --publish 127.0.0.1:4000:4000 jekyll-blog