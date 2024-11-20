@echo off
Title "build - CMD"
where pwsh >nul 2>nul
if %errorlevel% neq 0 (
    set POWERSHELL_CMD=powershell
) else (
    set POWERSHELL_CMD=pwsh
)
set SCRIPT_DIR=%~dp0
start %POWERSHELL_CMD% -ExecutionPolicy Bypass -File "%SCRIPT_DIR%build.ps1"